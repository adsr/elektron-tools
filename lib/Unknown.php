<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Unknown implements Field, Primitive {
    private int $len = 0;
    private array $data = [];

    public function __construct(int $len) {
        $this->len = $len;
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
        return implode(',', $this->data);
    }

    public function set(int|string $value): void {
    }
}
