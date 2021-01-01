<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class SevenBitCodecTest extends \PHPUnit\Framework\TestCase {
    public function testEncode() {
        $codec = new SevenBitCodec();

        $data = array_fill(0, 7, 0xff);
        $encoded_data = $codec->encode($data);
        $this->assertEquals([0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f], $encoded_data);

        $data = array_fill(0, 7, 0x7f);
        $encoded_data = $codec->encode($data);
        $this->assertEquals([0, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f], $encoded_data);
    }

    public function testDecode() {
        $codec = new SevenBitCodec();

        $encoded_data = [0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f];
        $decoded_data = $codec->decode($encoded_data);
        $this->assertEquals(array_fill(0, 7, 0xff), $decoded_data);

        $encoded_data = [0, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f];
        $decoded_data = $codec->decode($encoded_data);
        $this->assertEquals(array_fill(0, 7, 0x7f), $decoded_data);
    }
}
