<?php
declare(strict_types=1);

namespace Adsr\Elektron;

interface Field {
    public function fromSysex(array $data): void;
    public function toSysex(): array;
    public function getLength(): int;
}
