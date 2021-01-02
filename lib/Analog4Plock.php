<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Plock extends Struct {
    public function getDataMap(): array {
        return [
            'param' => new Int8_1(),
            'track' => new Int8_1(range(0, 6)),
            'vals' => new Arr(fn() => new Int8_1(), 64),
        ];
    }
}
