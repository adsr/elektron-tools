<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Lfo extends Struct {
    public function getDataMap(): array {
        return [
            'lfo1_spd' => new Int8_2(),
            'lfo2_spd' => new Int8_2(),
            'lfo1_mul' => new Int8_2(),
            'lfo2_mul' => new Int8_2(),
            'lfo1_fad' => new Int8_2(),
            'lfo2_fad' => new Int8_2(),
            'lfo1_sph' => new Int8_2(),
            'lfo2_sph' => new Int8_2(),
            'lfo1_mod' => new Int8_2(),
            'lfo2_mod' => new Int8_2(),
            'lfo1_wav' => new Int8_2(),
            'lfo2_wav' => new Int8_2(),
            'lfo1_dst1' => new Int8_2(),
            'lfo1_dst2' => new Int8_2(),
            'lfo2_dst1' => new Int8_2(),
            'lfo2_dst2' => new Int8_2(),
            'lfo1_dep1' => new Int16(),
            'lfo1_dep2' => new Int16(),
            'lfo2_dep1' => new Int16(),
            'lfo2_dep2' => new Int16(),
        ];
    }
}
