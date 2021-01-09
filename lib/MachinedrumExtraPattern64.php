<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class MachinedrumExtraPattern64 extends Struct {
    public function getDataMap(): array {
        return [
            'trig_pattern' => new Arr(16, fn() => new Int32()),
            'accent_pattern_all' => new Int32(),
            'slide_pattern_all' => new Int32(),
            'swing_pattern_all' => new Int32(),
            'locks' => new Arr(64, fn() => new Arr(32, fn() => new Int8_1())),
            'accent_pattern' => new Arr(16, fn() => new Int32()),
            'slide_pattern' => new Arr(16, fn() => new Int32()),
            'swing_pattern' => new Arr(16, fn() => new Int32()),
        ];
    }
}
