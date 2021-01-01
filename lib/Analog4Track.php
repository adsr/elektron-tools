<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Track extends Struct {
    public function getDataMap(): array {
        return [
            'flags' => new Arr(fn() => new Int16(), 64),
            'notes' => new Arr(fn() => new Int8_1(), 64),
            'vels' => new Arr(fn() => new Int8_1(), 64),
            'lens' => new Arr(fn() => new Int8_1(), 64),
            'micros' => new Arr(fn() => new Int8_1(), 64),
            'trigcs' => new Arr(fn() => new Int8_1(), 64),
            'settings' => new Analog4TrackSettings(),
            'slocks' => new Arr(fn() => new Int8_1(), 64),
            'arp' => new Analog4Arp(),
        ];
    }
}
