<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Arp extends Struct {
    public function getDataMap(): array {
        return [
            'mod' => new Int8_1(['OFF' => 0, 'TRU' => 1, 'UP' => 2, 'DWN' => 3, 'CYC' => 4, 'SHF' => 5, 'PLY' => 6]),
            'spd' => new Int8_1(range(0, 95)),
            'rng' => new Int8_1(range(0, 7)),
            'leg' => new Int8_1(['OFF' => 0, 'ON' => 1]),
            'len' => new Int8_1(),
            'unknown_0' => new Int8_1(),
            'n02' => new Int8_1(),
            'n03' => new Int8_1(),
            'n04' => new Int8_1(),
            'n02_locks' => new Arr(64, fn() => new Int8_1()),
            'n03_locks' => new Arr(64, fn() => new Int8_1()),
            'n04_locks' => new Arr(64, fn() => new Int8_1()),
            'pattern_len' => new Int8_1(range(0, 15)),
            'pattern' => new Int16(),
            'pattern_offsets' => new Arr(10, fn() => new Int8_1()),
        ];
    }
}
