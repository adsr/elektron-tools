<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Int8_2 implements Field, Primitive {
    protected int $num = 0;
    protected array $constraint;

    public function __construct(?array $constraint = null) {
        if ($constraint === null) {
            $constraint = range(0, 127);
        }
        $this->constraint = $constraint;
    }

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
        $constrained_value = null;
        if (is_string($value) && isset($this->constraint[$value])) {
            $constrained_value = $this->constraint[$value];
        } else if (in_array($value, $this->constraint, true)) {
            $constrained_value = $value;
        }
        if ($constrained_value === null) {
            $constrained_value = reset($this->constraint);
        }
        $this->num = $constrained_value;
    }
}
