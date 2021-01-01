<?php
declare(strict_types=1);

namespace Adsr\Elektron;

interface Primitive {
    public function get(): int|string;
    public function set(int|string $value): void;
}
