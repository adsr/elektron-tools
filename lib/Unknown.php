<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Unknown implements Field, Primitive {
    private int $len = 0;
    private array $data = [];

    public function __construct(int $len) {
        $this->len = $len;
        $this->data = array_fill(0, $len, 0);
    }

    public function fromSysex(array $data): void {
        $this->data = $data;
    }

    public function toSysex(): array {
        return $this->data;
    }

    public function getLength(): int {
        return $this->len;
    }

    public function get(): int|string {
        return implode(' ', array_map(fn($v) => sprintf('%02x', $v), $this->data));
    }

    public function set(int|string $value): void {
        throw new \RuntimeException('Not implemented');
    }

    public function randomize(): void {
        throw new \RuntimeException('Not implemented');
    }
}
