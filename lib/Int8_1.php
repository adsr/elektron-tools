<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Int8_1 extends Int8_2 {
    public function toSysex(): array {
        return [$this->num];
    }

    public function getLength(): int {
        return 1;
    }
}

