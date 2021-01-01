<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Perf extends Struct {
    public function getDataMap(): array {
        return [
            'name' => new Str(16),
            'dep1' => new Int8_2(),
            'trk1' => new Int8_1(),
            'dst1' => new Int8_1(),
            'dep2' => new Int8_2(),
            'trk2' => new Int8_1(),
            'dst2' => new Int8_1(),
            'dep3' => new Int8_2(),
            'trk3' => new Int8_1(),
            'dst3' => new Int8_1(),
            'dep4' => new Int8_2(),
            'trk4' => new Int8_1(),
            'dst4' => new Int8_1(),
            'dep5' => new Int8_2(),
            'trk5' => new Int8_1(),
            'dst5' => new Int8_1(),
            'val' => new Int8_2(),
        ];
    }
}
