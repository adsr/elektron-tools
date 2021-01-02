<?php
declare(strict_types=1);

namespace Adsr\Elektron;

abstract class Struct implements Field {
    private array $data_map = [];
    private int $length = -1;

    abstract function getDataMap(): array;

    public function __construct() {
        $this->data_map = $this->getDataMap();
    }

    public function fromSysex(array $data): void {
        $offset = 0;
        foreach ($this->data_map as $x => $field) {
            $len = $field->getLength();
            $chunk = array_slice($data, $offset, $len);
            if (count($chunk) !== $len) {
                throw new \RuntimeException(sprintf(
                    "Expected chunk len %d but saw %d",
                    $len,
                    count($chunk)
                ));
            }
            $field->fromSysex($chunk);
            $offset += $len;
        }
    }

    public function toSysex(): array {
        $data = [];
        foreach ($this->data_map as $field) {
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
            foreach ($this->data_map as $name => $field) {
                $this->length += $field->getLength();
            }
        }
        return $this->length;
    }

    public function getField(string $field): Field {
        return $this->data_map[$field]
            ?? throw new \RuntimeException("Field $field does not exist");
    }

    public function get(string $path): int|string {
        return $this->getVar($path)->get();
    }

    public function set(string $path, int|string $value): void {
        $this->getVar($path)->set($value);
    }

    public function getVar(string $path): Primitive {
        $fields = explode('.', $path);
        $field = $this;
        while (!empty($fields)) {
            $nested_field = array_shift($fields);
            $field = $field->getField($nested_field);
        }
        if (!($field instanceof Primitive)) {
            throw new \RuntimeException("Path $path is not a Primitive");
        }
        return $field;
    }

    public function getPaths(): array {
        $paths = [];
        foreach ($this->data_map as $name => $field) {
            if ($field instanceof Primitive) {
                $paths[] = $name;
            } else {
                foreach ($field->getPaths() as $sub_path) {
                    $paths[] = sprintf('%s.%s', $name, $sub_path);
                }
            }
        }
        return $paths;
    }

    public function __toString(): string {
        $paths = $this->getPaths();
        $dump = [];
        foreach ($paths as $path) {
            $dump[$path] = $this->get($path);
        }
        return print_r($dump, true);
    }
}
