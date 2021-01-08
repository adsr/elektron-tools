<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Track extends Struct {
    public function getDataMap(): array {
        return [
            'flags' => new Arr(64, fn() => new Int16()),
            'notes' => new Arr(64, fn() => new Int8_1(range(0, 127) + [255 => 255])),
            'vels' => new Arr(64, fn() => new Int8_1(range(1, 127) + [255 => 255])),
            'lens' => new Arr(64, fn() => new Int8_1(range(0, 127) + [255 => 255])),
            'micros' => new Arr(64, fn() => new Int8_1(range(-23, 23)), 64),
            'trigcs' => new Arr(64, fn() => new Int8_1(range(0, 63) + [255 => 255])),
            'settings' => new Analog4TrackSettings(),
            'slocks' => new Arr(64, fn() => new Int8_1(range(0, 127) + [255 => 255])),
            'arp' => new Analog4Arp(),
            'unknown_0' => new Unknown(6),
            'scale' => new Int8_1(['1X' => 2, '1/8X' => 6, '1/4X' => 5, '1/2X' => 4, '3/4X' => 3, '3/2X' => 1, '2X' => 0]),
            'tx_send_midi' => new Int8_1(['OFF' => 0, 'ON' => 1]),
        ];
    }
}
