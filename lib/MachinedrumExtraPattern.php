<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class MachinedrumExtraPattern extends Struct {
    public function getDataMap(): array {
        return [
            'accent_edit_all' => new Int32(),
            'slide_edit_all' => new Int32(),
            'swing_edit_all' => new Int32(),
            'accent_pattern' => new Arr(16, fn() => new Int32()),
            'slide_pattern' => new Arr(16, fn() => new Int32()),
            'swing_pattern' => new Arr(16, fn() => new Int32()),
        ];
    }
}
