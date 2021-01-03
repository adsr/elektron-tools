<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Str implements Field, Primitive {
    private int $len = 0;
    private string $str = '';

    public function __construct(int $len) {
        $this->len = $len;
    }

    public function fromSysex(array $data): void {
        $this->str = trim(implode('', array_map('chr', $data)));
    }

    public function toSysex(): array {
        $data = array_fill(0, $this->len, 0);
        for ($i = 0; $i < $this->len; $i++) {
            $data[$i] = ord(substr($this->str, $i, 1));
        }
        return $data;
    }

    public function getLength(): int {
        return $this->len;
    }

    public function get(): int|string {
        return $this->str;
    }

    public function set(int|string $value): void {
        $this->str = substr((string)$value, 0, $this->len);
    }

    public function randomize(): void {
        throw new \RuntimeException('Not implemented');
    }
}

