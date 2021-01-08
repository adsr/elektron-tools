<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Arr implements Container, \ArrayAccess {
    private array $arr = [];
    private int $size = 0;
    private int $length = -1;

    public function __construct(int $num_elements, callable $new_class_fn) {
        $this->num_elements = $num_elements;
        for ($i = 0; $i < $num_elements; $i++) {
            $this->arr[] = $new_class_fn();
        }
    }

    public function fromSysex(array $data): void {
        $offset = 0;
        foreach ($this->arr as $i => $field) {
            $len = $field->getLength();
            $chunk = array_slice($data, $offset, $len);
            if (count($chunk) !== $len) {
                throw new \RuntimeException(sprintf(
                    "Expected chunk len %d but saw %d",
                    $len,
                    count($chunk),
                ));
            }
            $field->fromSysex($chunk);
            $offset += $len;
        }
    }

    public function toSysex(): array {
        $data = [];
        foreach ($this->arr as $field) {
            $len = $field->getLength();
            $chunk = $field->toSysex();
            if (count($chunk) !== $len) {
                throw new \RuntimeException(sprintf(
                    "Expected chunk len %d but saw %d",
                    $len,
                    count($chunk)
                ));
            }
            $data = array_merge($data, array_values($chunk));
        }
        return $data;
    }

    public function getLength(): int {
        if ($this->length === -1) {
            $this->length = 0;
            foreach ($this->arr as $i => $field) {
                $this->length += $field->getLength();
            }
        }
        return $this->length;
    }

    public function getPaths(): array {
        $paths = [];
        foreach ($this->arr as $i => $field) {
            if ($field instanceof Primitive) {
                $paths[] = $i;
            } else {
                foreach ($field->getPaths() as $sub_path) {
                    $paths[] = sprintf('%s.%s', $i, $sub_path);
                }
            }
        }
        return $paths;
    }

    public function getField(string $field): Field {
        return $this[$field];
    }

    public function offsetExists(mixed $offset): bool {
        $i = (int)$offset;
        return ($i >= 0 && $i < $this->num_elements);
    }

    public function offsetGet(mixed $offset): mixed {
        $i = (int)$offset;
        return $this->arr[$i]
            ?? throw new \RuntimeException(sprintf("Array index %d is out of bounds", $i));
    }

    public function offsetSet(mixed $offset, mixed $value): void {
        throw new \RuntimeException("Array is read-only");
    }

    public function offsetUnset(mixed $offset): void {
        throw new \RuntimeException("Array is read-only");
    }
}
