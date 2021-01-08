<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class ShittyMidi {
    private static string $device = '';
    private static string $device_name = '';

    public static function readA4Kit(): array|false {
        self::setDeviceName('Elektron Analog Four MIDI');
        return self::read([0xf0,0x00,0x20,0x3c,0x06,0x00,104,0x01,0x01,0x01,0x00,0x00,0x00,0x05,0xf7]);
    }

    public static function readA4Pattern(): array|false {
        self::setDeviceName('Elektron Analog Four MIDI');
        return self::read([0xf0,0x00,0x20,0x3c,0x06,0x00,106,0x01,0x01,0x01,0x00,0x00,0x00,0x05,0xf7]);
    }

    public static function readMdKit(): array|false {
        self::setDeviceName('UM-3G MIDI 1');
        return self::read([0xf0,0x00,0x20,0x3c,0x02,0x00,0x53,0x00,0xf7]);
    }

    public static function readMdPattern(): array|false {
        self::setDeviceName('UM-3G MIDI 1');
        return self::read([0xf0,0x00,0x20,0x3c,0x02,0x00,0x68,0x00,0xf7]);
    }

    public static function send(array $bytes): void {
        $device = self::getDevice();
        $sysex_dump = array_map('dechex', $bytes);
        $sysex_hex = implode(' ', $sysex_dump);
        // echo "Sending $sysex_hex\n";
        shell_exec(sprintf(
            "amidi -p %s -S %s",
            escapeshellarg($device),
            escapeshellarg($sysex_hex)
        ));
    }

    private static function read(array $cmd): array|false {
        $device = self::getDevice();
        $device_read = popen(sprintf("amidi -p %s -d -t 2", escapeshellarg($device)), 'r');
        if (!$device_read) {
            fwrite(STDERR, "Device read failed\n");
            return false;
        }
        $command = implode(' ', array_map('dechex', $cmd));
        // echo "Sending $command\n";
        shell_exec(sprintf("amidi -p %s -S '$command'", escapeshellarg($device)));
        $sysex_dump = stream_get_contents($device_read);
        pclose($device_read);
        $match = [];

        // echo "\n\n[[$sysex_dump]]\n\n";

        if (!preg_match('/F0.{32,}?F7/', $sysex_dump, $match)) {
            fwrite(STDERR, "Did not see sysex in output: $sysex_dump\n");
            return false;
        }
        $sysex = $match[0];

        $sysex_hex = explode(' ', $sysex);
        $sysex_bytes = array_map('hexdec', $sysex_hex);

        return $sysex_bytes;
    }

    public static function setDeviceName(string $device_name): void {
        if (self::$device_name !== $device_name) {
            self::$device_name = $device_name;
            self::$device = '';
        }
    }

    private static function getDevice(): string {
        if (empty(self::$device)) {
            self::$device = shell_exec("amidi -l | grep -m1 " . escapeshellarg(self::$device_name) . " | awk '{print \$2}'");
            if (empty(self::$device)) {
                throw new \RuntimeException("Did not see Elektron Analog Four device");
            }
        }
        return self::$device;
    }
}
