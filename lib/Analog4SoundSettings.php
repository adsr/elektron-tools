<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4SoundSettings extends Struct {
    public function getDataMap(): array {
        return [
            'velmod1_dep' => new Int8_1(),
            'unknown_0' => new Unknown(2),
            'velmod1_dst' => new Int8_1(),
            'velmod2_dep' => new Int8_1(),
            'unknown_1' => new Unknown(2),
            'velmod2_dst' => new Int8_1(),
            'velmod3_dep' => new Int8_1(),
            'unknown_2' => new Unknown(2),
            'velmod3_dst' => new Int8_1(),
            'velmod4_dep' => new Int8_1(),
            'unknown_3' => new Unknown(2),
            'velmod4_dst' => new Int8_1(),
            'velmod5_dep' => new Int8_1(),
            'unknown_4' => new Unknown(2),
            'velmod5_dst' => new Int8_1(),
            'unknown_5' => new Unknown(1),
            'velmod_bipolar' => new Int8_1(['OFF' => 0, 'ON' => 1]),
            'pb1_dep' => new Int8_1(),
            'unknown_6' => new Unknown(2),
            'pb1_dst' => new Int8_1(),
            'pb2_dep' => new Int8_1(),
            'unknown_7' => new Unknown(2),
            'pb2_dst' => new Int8_1(),
            'pb3_dep' => new Int8_1(),
            'unknown_8' => new Unknown(2),
            'pb3_dst' => new Int8_1(),
            'pb4_dep' => new Int8_1(),
            'unknown_9' => new Unknown(2),
            'pb4_dst' => new Int8_1(),
            'pb5_dep' => new Int8_1(),
            'unknown_10' => new Unknown(2),
            'pb5_dst' => new Int8_1(),
            'mw1_dep' => new Int8_1(),
            'unknown_11' => new Unknown(2),
            'mw1_dst' => new Int8_1(),
            'mw2_dep' => new Int8_1(),
            'unknown_12' => new Unknown(2),
            'mw2_dst' => new Int8_1(),
            'mw3_dep' => new Int8_1(),
            'unknown_13' => new Unknown(2),
            'mw3_dst' => new Int8_1(),
            'mw4_dep' => new Int8_1(),
            'unknown_14' => new Unknown(2),
            'mw4_dst' => new Int8_1(),
            'mw5_dep' => new Int8_1(),
            'unknown_15' => new Unknown(2),
            'mw5_dst' => new Int8_1(),
            'bc1_dep' => new Int8_1(),
            'unknown_16' => new Unknown(2),
            'bc1_dst' => new Int8_1(),
            'bc2_dep' => new Int8_1(),
            'unknown_17' => new Unknown(2),
            'bc2_dst' => new Int8_1(),
            'bc3_dep' => new Int8_1(),
            'unknown_18' => new Unknown(2),
            'bc3_dst' => new Int8_1(),
            'bc4_dep' => new Int8_1(),
            'unknown_19' => new Unknown(2),
            'bc4_dst' => new Int8_1(),
            'bc5_dep' => new Int8_1(),
            'unknown_20' => new Unknown(2),
            'bc5_dst' => new Int8_1(),
            'at1_dep' => new Int8_1(),
            'unknown_21' => new Unknown(2),
            'at1_dst' => new Int8_1(),
            'at2_dep' => new Int8_1(),
            'unknown_22' => new Unknown(2),
            'at2_dst' => new Int8_1(),
            'at3_dep' => new Int8_1(),
            'unknown_23' => new Unknown(2),
            'at3_dst' => new Int8_1(),
            'at4_dep' => new Int8_1(),
            'unknown_24' => new Unknown(2),
            'at4_dst' => new Int8_1(),
            'at5_dep' => new Int8_1(),
            'unknown_25' => new Unknown(2),
            'at5_dst' => new Int8_1(),
        ];
    }
}
