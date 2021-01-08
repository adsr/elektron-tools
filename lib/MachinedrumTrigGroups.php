<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class MachinedrumTrigGroups extends Struct {
    public function getDataMap(): array {
        return [
            'trig_tracks' => new Arr(16, fn() => new Int8_1(range(0, 15) + [255 => 255])),
            'mute_tracks' => new Arr(16, fn() => new Int8_1(range(0, 15) + [255 => 255])),
        ];
    }
}
