<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Int8_2 implements Field, Primitive {
    protected int $num = 0;

    public function fromSysex(array $data): void {
        $this->num = $data[0];
    }

    public function toSysex(): array {
        return [$this->num, 0];
    }

    public function getLength(): int {
        return 2;
    }

    public function get(): int|string {
        return $this->num;
    }

    public function set(int|string $value): void {
        $this->num = max(min((int)$value, 0xff), 0x00);
    }
}
