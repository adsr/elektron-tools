<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class MachinedrumLfo extends Struct {
    public function getDataMap(): array {
        return [
            'track' => new Int8_1(range(0, 15)),
            'param' => new Int8_1(range(0, 23)),
            'shp1' => new Int8_1(range(0, 5)),
            'shp2' => new Int8_1(range(0, 5)),
            'updte' => new Int8_1(range(0, 2)),
            'unknown' => new Unknown(31),
        ];
    }
}
