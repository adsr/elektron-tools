<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Int8_2 implements Field, Primitive {
    protected int $num = 0;
    protected array $constraint;
    protected bool $signed = false;

    public function __construct(?array $constraint = null) {
        if ($constraint === null) {
            $constraint = range(0, 127);
        }
        $this->constraint = $constraint;
        $this->signed = !empty(array_filter($constraint, fn ($v) => $v < 0));
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
        if ($this->num < 0) {
            $this->num = 256 - $this->num;
        }
        $this->num = min(max($constrained_value, 0), 255);
    }

    public function randomize(): void {
        $rand_val = $this->constraint[array_rand($this->constraint)];
        $this->set($rand_val);
    }
}
