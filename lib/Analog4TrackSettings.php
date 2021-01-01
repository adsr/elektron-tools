<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4TrackSettings extends Struct {
    public function getDataMap(): array {
        return [
            'note' => new Int8_1(),
            'vel' => new Int8_1(),
            'trig_len' => new Int8_1(),
            'unknown_0' => new Int8_1(),
            'octave' => new Int8_1(),
            'unknown_1' => new Int8_1(),
            'track_len' => new Int8_1(),
            'quantize_amt' => new Int8_1(),
            'key_note' => new Int8_1(),
            'key_scale' => new Int8_1(),
            'transposable' => new Int8_1(),
        ];
    }
}
