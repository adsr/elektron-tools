<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Int16 implements Field, Primitive {
    protected int $num = 0;

    public function fromSysex(array $data): void {
        $this->num = ($data[0] << 8) + $data[1];
    }

    public function toSysex(): array {
        return [
            ($this->num >> 8) & 0xff,
            $this->num & 0xff
        ];
    }

    public function getLength(): int {
        return 2;
    }

    public function get(): int|string {
        return $this->num;
    }

    public function set(int|string $value): void {
        $this->num = min(max((int)$value, 0x0000), 0x7fff);
    }

    public function randomize(): void {
        $rand_val = random_int(0x0000, 0x7fff);
        $this->set($rand_val);
    }
}
