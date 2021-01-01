<?php
declare(strict_types=1);

namespace Adsr\Elektron;

trait Util {
    public function checksum(array $data): int {
        return array_sum($data) & 0x3fff;
    }

    public function ensureLen(array $data, int $len): void {
        $data_len = count($data);
        if ($data_len !== $len) {
            throw new RuntimeException(sprintf(
                'Expected len %d but saw %d',
                $len,
                $data_len
            ));
        }
    }

    public function decode7bit(array $data): array {
        return (new SevenBitCodec())->decode($data);
    }

    public function encode7bit(array $data): array {
        return (new SevenBitCodec())->encode($data);
    }
}
