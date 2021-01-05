<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Lfo extends Struct {
    public function getDataMap(): array {
        return [
            'lfo1_spd' => new Int8_2(),
            'lfo2_spd' => new Int8_2(),
            'lfo1_mul' => new Int8_2([
                'X1' =>  0, 'X2' =>  1, 'X4' =>  2, 'X8' =>  3, 'X16' =>  4, 'X32' =>  5, 'X64' =>  6, 'X128' =>  7, 'X256' =>  8, 'X512' =>  9, 'X1K' => 10, 'X2K' => 11,
                '.1' => 12, '.2' => 13, '.4' => 14, '.8' => 15, '.16' => 16, '.32' => 17, '.64' => 18, '.128' => 19, '.256' => 20, '.512' => 21, '.1K' => 22, '.2K' => 23,
            ]),
            'lfo2_mul' => new Int8_2([
                'X1' =>  0, 'X2' =>  1, 'X4' =>  2, 'X8' =>  3, 'X16' =>  4, 'X32' =>  5, 'X64' =>  6, 'X128' =>  7, 'X256' =>  8, 'X512' =>  9, 'X1K' => 10, 'X2K' => 11,
                '.1' => 12, '.2' => 13, '.4' => 14, '.8' => 15, '.16' => 16, '.32' => 17, '.64' => 18, '.128' => 19, '.256' => 20, '.512' => 21, '.1K' => 22, '.2K' => 23,
            ]),
            'lfo1_fad' => new Int8_2(),
            'lfo2_fad' => new Int8_2(),
            'lfo1_sph' => new Int8_2(),
            'lfo2_sph' => new Int8_2(),
            'lfo1_mod' => new Int8_2(['FRE' => 0, 'TRG' => 1, 'HLD' => 2, 'ONE' => 3, 'HLF' => 4]),
            'lfo2_mod' => new Int8_2(['FRE' => 0, 'TRG' => 1, 'HLD' => 2, 'ONE' => 3, 'HLF' => 4]),
            'lfo1_wav' => new Int8_2(['TRI' => 0, 'SIN' => 1, 'SQR' => 2, 'SAW' => 3, 'EXP' => 4, 'RMP' => 5, 'RND' => 6]),
            'lfo2_wav' => new Int8_2(['TRI' => 0, 'SIN' => 1, 'SQR' => 2, 'SAW' => 3, 'EXP' => 4, 'RMP' => 5, 'RND' => 6]),
            'lfo1_dst1' => new Int8_2(Analog4Dest::LFO1),
            'lfo1_dst2' => new Int8_2(Analog4Dest::LFO1),
            'lfo2_dst1' => new Int8_2(Analog4Dest::LFO2),
            'lfo2_dst2' => new Int8_2(Analog4Dest::LFO2),
            'lfo1_dep1' => new Int16(),
            'lfo1_dep2' => new Int16(),
            'lfo2_dep1' => new Int16(),
            'lfo2_dep2' => new Int16(),
        ];
    }
}
