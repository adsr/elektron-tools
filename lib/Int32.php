<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Int32 implements Field, Primitive {
    protected int $num = 0;

    public function fromSysex(array $data): void {
        $this->num =
            + ($data[0] << 24)
            + ($data[1] << 16)
            + ($data[2] << 8)
            +  $data[3];
    }

    public function toSysex(): array {
        return [
            ($this->num >> 24) & 0xff,
            ($this->num >> 16) & 0xff,
            ($this->num >> 8) & 0xff,
            $this->num & 0xff
        ];
    }

    public function getLength(): int {
        return 4;
    }

    public function get(): int|string {
        return $this->num;
    }

    public function set(int|string $value): void {
        $this->num = min(max((int)$value, 0x0000), 0x7fffffff);
    }

    public function randomize(): void {
        $rand_val = random_int(0x0000, 0x7fffffff);
        $this->set($rand_val);
    }
}
