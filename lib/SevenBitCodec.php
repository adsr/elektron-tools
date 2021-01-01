<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class SevenBitCodec {
    /**
     * @param int[] $data 7-bit encoded data
     * @return int[] decoded data
     */
    public function decode(array $data): array {
        $data_decoded = [];
        $data_chunked = array_chunk($data, 8);
        foreach ($data_chunked as $data_chunk) {
            $msbs = array_shift($data_chunk);
            foreach ($data_chunk as $i => $data) {
                $msb = ($msbs >> (6 - $i)) & 0x01;
                $data_decoded[] = $data + ($msb << 7);
            }
        }
        return $data_decoded;
    }

    /**
     * @param int[] $data
     * @return int[] 7-bit encoded data
     */
    public function encode(array $data): array {
        $data_encoded = [];
        $data_chunked = array_chunk($data, 7);
        foreach ($data_chunked as $ci => $data_chunk) {
            $msbs = 0;
            $data_encoded[] = $msbs;
            $msb_index = count($data_encoded) - 1;
            foreach ($data_chunk as $i => $data) {
                if (is_array($data)) {
                    throw new Exception();
                }
                $msb = ($data & 0xf0) >> 7;
                $msbs |= $msb << (6 - $i);
                $data_encoded[] = $data & 0x7f;
            }
            $data_encoded[$msb_index] = $msbs;
        }
        return $data_encoded;
    }
}
