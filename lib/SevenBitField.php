<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class SevenBitField implements Container {
    use Util;

    private int $encoded_size = 0;
    private Container $decoded_field;

    public function __construct(int $encoded_size, Container $decoded_field) {
        $this->encoded_size = $encoded_size;
        $this->decoded_field = $decoded_field;
    }

    public function fromSysex(array $data): void {
        $data_decoded = $this->decode7bit($data);
        $this->decoded_field->fromSysex($data_decoded);
    }

    public function toSysex(): array {
        $data_decoded = $this->decoded_field->toSysex();
        return $this->encode7bit($data_decoded);
    }

    public function getLength(): int {
        return $this->encoded_size;
    }

    public function getPaths(): array {
        return $this->decoded_field->getPaths();
    }

    public function getField(string $field): Field {
        return $this->decoded_field->getField($field);
    }
}
