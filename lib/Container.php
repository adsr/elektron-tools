<?php
declare(strict_types=1);

namespace Adsr\Elektron;

interface Container extends Field {
    public function getPaths(): array;
    public function getField(string $field): Field;
}
