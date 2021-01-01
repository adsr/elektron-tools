<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Arp extends Struct {
    public function getDataMap(): array {
        return [
            'mod' => new Int8_1(),
            'spd' => new Int8_1(),
            'rng' => new Int8_1(),
            'leg' => new Int8_1(),
            'len' => new Int8_1(),
            'unknown_0' => new Int8_1(),
            'n02' => new Int8_1(),
            'n03' => new Int8_1(),
            'n04' => new Int8_1(),
            'n02_locks' => new Arr(fn() => new Int8_1(), 64),
            'n03_locks' => new Arr(fn() => new Int8_1(), 64),
            'n04_locks' => new Arr(fn() => new Int8_1(), 64),
            'pattern_len' => new Int8_1(),
            'pattern' => new Int16(),
            'pattern_offsets' => new Arr(fn() => new Int8_1(), 10),
        ];
    }
}
