<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class ShittyMidi {
    private static string $device = '';

    public static function readKit(): array {
        return self::read(104);
    }

    public static function readPattern(): array {
        return self::read(106);
    }

    public static function send(array $bytes): void {
        $device = self::getDevice();
        $sysex_dump = array_map('dechex', $bytes);
        $sysex_hex = implode(' ', $sysex_dump);
        shell_exec(sprintf(
            "amidi -p %s -S %s",
            escapeshellarg($device),
            escapeshellarg($sysex_hex)
        ));
    }

    private static function read(int $cmd): array|false {
        $device = self::getDevice();
        $device_read = popen(sprintf("amidi -p %s -d -t 2", escapeshellarg($device)), 'r');
        if (!$device_read) {
            fwrite(STDERR, "Device read failed\n");
            return false;
        }
        $command = dechex($cmd);
        shell_exec(sprintf("amidi -p %s -S 'f0 00 20 3c 06 00 $command 01 01 01 00 00 00 05 f7'", escapeshellarg($device)));
        $sysex_dump = stream_get_contents($device_read);
        pclose($device_read);
        $match = [];
        if (!preg_match('/F0.*?F7/', $sysex_dump, $match)) {
            fwrite(STDERR, "Did not see sysex in output: $sysex_dump\n");
            return false;
        }
        $sysex = $match[0];

        $sysex_hex = explode(' ', $sysex);
        $sysex_bytes = array_map('hexdec', $sysex_hex);

        return $sysex_bytes;
    }

    private static function getDevice(): string {
        if (empty(self::$device)) {
            self::$device = shell_exec("amidi -l | grep -m1 'Elektron Analog Four MIDI' | awk '{print \$2}'");
            if (empty(self::$device)) {
                throw new \RuntimeException("Did not see Elektron Analog Four device");
            }
        }
        return self::$device;
    }
}
