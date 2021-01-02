<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4TrackSettings extends Struct {
    public function getDataMap(): array {
        return [
            'note' => new Int8_1(),
            'vel' => new Int8_1(range(1, 127)),
            'trig_len' => new Int8_1(),
            'unknown_0' => new Unknown(1),
            'octave' => new Int8_1(range(-5, 5)),
            'unknown_1' => new Unknown(1),
            'track_len' => new Int8_1(range(2, 64)),
            'quantize_amt' => new Int8_1(),
            'key_note' => new Int8_1(range(0, 11)),
            'key_scale' => new Int8_1(['OFF' => 0, 'MAJ' => 1, 'MIN' => 2]),
            'transposable' => new Int8_1(['OFF' => 0, 'ON' => 1]),
        ];
    }
}
