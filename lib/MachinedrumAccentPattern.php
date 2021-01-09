<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class MachinedrumAccentPattern extends Struct {
    public function getDataMap(): array {
        return [
            'accent_pattern' => new Int32(),
            'slide_pattern' => new Int32(),
            'swing_pattern' => new Int32(),
            'swing_amount' => new Int32(),
        ];
    }
}
