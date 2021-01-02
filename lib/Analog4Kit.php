<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4Kit extends Struct {
    use Util;

    public const DEFAULT = [0xf0,0x00,0x20,0x3c,0x06,0x00,0x58,0x01,0x01,0x00,0x00,0x00,0x00,0x00,0x0a,0x4b,0x49,0x54,0x00,0x20,0x31,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x64,0x00,0x00,0x64,0x00,0x64,0x00,0x64,0x00,0x07,0x64,0x00,0x64,0x00,0x3e,0x6f,0x3a,0x40,0x3a,0x00,0x00,0x00,0x05,0x00,0x00,0x00,0x00,0x00,0x53,0x4f,0x55,0x4e,0x44,0x00,0x20,0x31,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x01,0x00,0x00,0x01,0x00,0x64,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x0a,0x00,0x25,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x7f,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x7f,0x00,0x14,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x0c,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x64,0x00,0x20,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x64,0x00,0x08,0x00,0x00,0x08,0x00,0x08,0x00,0x02,0x00,0x02,0x00,0x00,0x02,0x00,0x00,0x00,0x00,0x00,0x00,0x0c,0x00,0x0d,0x00,0x14,0x00,0x4c,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x70,0x00,0x60,0x00,0x04,0x00,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x27,0x00,0x31,0x00,0x30,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x01,0x02,0x00,0x02,0x01,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x26,0x00,0x00,0x00,0x00,0x2b,0x00,0x00,0x00,0x00,0x23,0x00,0x00,0x00,0x28,0x00,0x00,0x00,0x00,0x24,0x00,0x00,0x02,0x00,0x00,0x00,0x14,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x0c,0x00,0x00,0x00,0x00,0x0d,0x04,0x00,0x00,0x20,0x00,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5e,0x40,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x00,0x00,0x00,0x00,0x5f,0x00,0x00,0x00,0x00,0x21,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x7f,0x3a,0x3e,0x7a,0x4e,0x3e,0x6f,0x3a,0x40,0x3a,0x00,0x00,0x00,0x05,0x00,0x00,0x00,0x00,0x00,0x53,0x4f,0x55,0x4e,0x44,0x00,0x20,0x32,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x01,0x00,0x00,0x01,0x00,0x64,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x0a,0x00,0x25,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x7f,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x7f,0x00,0x14,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x0c,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x64,0x00,0x20,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x64,0x00,0x08,0x00,0x00,0x08,0x00,0x08,0x00,0x02,0x00,0x02,0x00,0x00,0x02,0x00,0x00,0x00,0x00,0x00,0x00,0x0c,0x00,0x0d,0x00,0x14,0x00,0x4c,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x70,0x00,0x60,0x00,0x04,0x00,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x27,0x00,0x31,0x00,0x30,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x01,0x02,0x00,0x02,0x01,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x26,0x00,0x00,0x00,0x00,0x2b,0x00,0x00,0x00,0x00,0x23,0x00,0x00,0x00,0x28,0x00,0x00,0x00,0x00,0x24,0x00,0x00,0x02,0x00,0x00,0x00,0x14,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x0c,0x00,0x00,0x00,0x00,0x0d,0x04,0x00,0x00,0x20,0x00,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5e,0x40,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x00,0x00,0x00,0x00,0x5f,0x00,0x00,0x00,0x00,0x21,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x7f,0x3a,0x3e,0x7a,0x4e,0x3e,0x6f,0x3a,0x40,0x3a,0x00,0x00,0x00,0x05,0x00,0x00,0x00,0x00,0x00,0x53,0x4f,0x55,0x4e,0x44,0x00,0x20,0x33,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x01,0x00,0x00,0x01,0x00,0x64,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x0a,0x00,0x25,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x7f,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x7f,0x00,0x14,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x0c,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x64,0x00,0x20,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x64,0x00,0x08,0x00,0x00,0x08,0x00,0x08,0x00,0x02,0x00,0x02,0x00,0x00,0x02,0x00,0x00,0x00,0x00,0x00,0x00,0x0c,0x00,0x0d,0x00,0x14,0x00,0x4c,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x70,0x00,0x60,0x00,0x04,0x00,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x27,0x00,0x31,0x00,0x30,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x01,0x02,0x00,0x02,0x01,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x26,0x00,0x00,0x00,0x00,0x2b,0x00,0x00,0x00,0x00,0x23,0x00,0x00,0x00,0x28,0x00,0x00,0x00,0x00,0x24,0x00,0x00,0x02,0x00,0x00,0x00,0x14,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x0c,0x00,0x00,0x00,0x00,0x0d,0x04,0x00,0x00,0x20,0x00,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5e,0x40,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x00,0x00,0x00,0x00,0x5f,0x00,0x00,0x00,0x00,0x21,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x7f,0x3a,0x3e,0x7a,0x4e,0x3e,0x6f,0x3a,0x40,0x3a,0x00,0x00,0x00,0x05,0x00,0x00,0x00,0x00,0x00,0x53,0x4f,0x55,0x4e,0x44,0x00,0x20,0x34,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x01,0x00,0x00,0x01,0x00,0x64,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x0a,0x00,0x25,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x7f,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x7f,0x00,0x14,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x0c,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x64,0x00,0x20,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x64,0x00,0x08,0x00,0x00,0x08,0x00,0x08,0x00,0x02,0x00,0x02,0x00,0x00,0x02,0x00,0x00,0x00,0x00,0x00,0x00,0x0c,0x00,0x0d,0x00,0x14,0x00,0x4c,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x70,0x00,0x60,0x00,0x04,0x00,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x27,0x00,0x31,0x00,0x30,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x01,0x02,0x00,0x02,0x01,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x26,0x00,0x00,0x00,0x00,0x2b,0x00,0x00,0x00,0x00,0x23,0x00,0x00,0x00,0x28,0x00,0x00,0x00,0x00,0x24,0x00,0x00,0x02,0x00,0x00,0x00,0x14,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x0c,0x00,0x00,0x00,0x00,0x0d,0x04,0x00,0x00,0x20,0x00,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5e,0x40,0x00,0x00,0x5c,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x00,0x00,0x00,0x00,0x5f,0x00,0x00,0x00,0x00,0x21,0x20,0x00,0x00,0x21,0x00,0x00,0x00,0x00,0x22,0x00,0x00,0x00,0x27,0x00,0x00,0x00,0x00,0x5d,0x00,0x00,0x00,0x5e,0x78,0x3a,0x3e,0x7a,0x4e,0x00,0x00,0x00,0x00,0x04,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x7f,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x75,0x00,0x33,0x00,0x00,0x5a,0x00,0x7f,0x00,0x60,0x00,0x00,0x00,0x00,0x7f,0x00,0x00,0x00,0x00,0x00,0x00,0x7f,0x00,0x17,0x00,0x00,0x00,0x00,0x10,0x00,0x40,0x00,0x20,0x00,0x00,0x00,0x00,0x7f,0x00,0x00,0x00,0x00,0x00,0x00,0x2d,0x00,0x08,0x00,0x20,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x7f,0x00,0x00,0x40,0x00,0x60,0x00,0x60,0x00,0x04,0x00,0x00,0x04,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x24,0x00,0x00,0x28,0x00,0x1b,0x00,0x34,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x02,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x04,0x00,0x00,0x00,0x49,0x20,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x40,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x20,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x49,0x02,0x00,0x00,0x00,0x00,0x00,0x05,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x07,0x00,0x00,0x07,0x00,0x07,0x00,0x07,0x00,0x05,0x00,0x00,0x05,0x00,0x05,0x00,0x05,0x00,0x00,0x00,0x00,0x00,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x08,0x00,0x00,0x08,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x08,0x00,0x09,0x00,0x00,0x0a,0x00,0x0b,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x70,0x00,0x00,0x70,0x00,0x04,0x00,0x04,0x00,0x40,0x00,0x00,0x40,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x08,0x00,0x09,0x00,0x0a,0x00,0x00,0x0b,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x40,0x00,0x00,0x40,0x00,0x40,0x00,0x20,0x00,0x20,0x00,0x00,0x20,0x00,0x20,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x02,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x04,0x00,0x00,0x00,0x44,0x20,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x40,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x20,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x44,0x02,0x00,0x41,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x42,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x43,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x44,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x45,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x46,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x47,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x48,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x49,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x4a,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x49,0x4e,0x31,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x49,0x4e,0x32,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x00,0x60,0x00,0x00,0x00,0x06,0x00,0x00,0x10,0x40,0x7f,0x7f,0x00,0x00,0x01,0x00,0x4a,0x33,0x15,0x48,0xf7];
    public const LEN = 2770;

    public function getDataMap(): array {
        return [
            'unknown_0' => new Unknown(20),
            'mix_t1' => new Int8_2(),
            'mix_t2' => new Int8_2(),
            'mix_t3' => new Int8_2(),
            'mix_t4' => new Int8_2(),
            'mix_fx' => new Int8_2(),
            'unknown_1' => new Unknown(14),
            'sound1' => new Analog4Sound(),
            'unknown_2' => new Unknown(16),
            'sound2' => new Analog4Sound(),
            'unknown_3' => new Unknown(16),
            'sound3' => new Analog4Sound(),
            'unknown_4' => new Unknown(16),
            'sound4' => new Analog4Sound(),
            'unknown_5' => new Unknown(8),
            'extin_lvol' => new Int8_2(),
            'extin_rvol' => new Int8_2(),
            'extin_lpan' => new Int8_2(),
            'extin_rpan' => new Int8_2(),
            'extin_lcho' => new Int8_2(),
            'extin_ldel' => new Int8_2(),
            'extin_lrev' => new Int8_2(),
            'extin_rcho' => new Int8_2(),
            'extin_rdel' => new Int8_2(),
            'extin_rrev' => new Int8_2(),
            'unknown_6' => new Unknown(32),
            'fx_chor_pre' => new Int8_2(),
            'fx_chor_spd' => new Int8_2(),
            'fx_chor_dep' => new Int8_2(),
            'fx_chor_wid' => new Int8_2(),
            'fx_chor_fdb' => new Int8_2(),
            'fx_chor_hpf' => new Int8_2(),
            'fx_chor_lpf' => new Int8_2(),
            'fx_chor_del' => new Int8_2(),
            'fx_chor_rev' => new Int8_2(),
            'fx_chor_vol' => new Int8_2(),
            'fx_del_tim' => new Int8_2(),
            'fx_del_x' => new Int8_2(['OFF' => 0, 'ON' => 1]),
            'unknown_7' => new Unknown(2),
            'fx_del_wid' => new Int8_2(),
            'fx_del_fdb' => new Int8_2(),
            'fx_del_hpf' => new Int8_2(),
            'fx_del_lpf' => new Int8_2(),
            'fx_del_ovr' => new Int8_2(),
            'fx_del_rev' => new Int8_2(),
            'fx_del_vol' => new Int8_2(),
            'fx_rev_pre' => new Int8_2(),
            'fx_rev_dec' => new Int8_2(),
            'fx_rev_frq' => new Int8_2(),
            'fx_rev_gai' => new Int8_2(),
            'fx_rev_hpf' => new Int8_2(),
            'fx_rev_lpf' => new Int8_2(),
            'fx_rev_vol' => new Int8_2(),
            'fx_lfo' => new Analog4Lfo(),
            'unknown_8' => new Unknown(6),
            'fx_settings' => new Analog4SoundSettings(),
            'fx_portamento' => new Int8_1(['OFF' => 0, 'ON' => 1, 'LEGATO' => 2]),
            'fx_legato' => new Int8_1(['OFF' => 0, 'ON' => 1]),
            'unknown_9' => new Unknown(8),
            'cv_c_tun' => new Int8_2(),
            'unknown_10' => new Unknown(6),
            'cv_c_fin' => new Int8_2(),
            'unknown_11' => new Unknown(18),
            'cv_a_trk' => new Int8_2(['TR1' => 0, 'TR2' => 1, 'TR3' => 2, 'TR4' => 3, 'FX' => 4, 'CV' => 5]),
            'unknown_12' => new Unknown(2),
            'cv_c_trk' => new Int8_2(['TR1' => 0, 'TR2' => 1, 'TR3' => 2, 'TR4' => 3, 'FX' => 4, 'CV' => 5]),
            'unknown_13' => new Unknown(2),
            'cv_env1_atk' => new Int8_2(),
            'cv_env2_atk' => new Int8_2(),
            'cv_env1_dec' => new Int8_2(),
            'cv_env2_dec' => new Int8_2(),
            'cv_env1_sus' => new Int8_2(),
            'cv_env2_sus' => new Int8_2(),
            'cv_env1_rel' => new Int8_2(),
            'cv_env2_rel' => new Int8_2(),
            'cv_env1_shp' => new Int8_2(range(0, 11)),
            'cv_env2_shp' => new Int8_2(range(0, 11)),
            'cv_env1_len' => new Int8_2(),
            'cv_env2_len' => new Int8_2(),
            'cv_env1_dst1' => new Int8_2(),
            'cv_env1_dst2' => new Int8_2(),
            'cv_env2_dst1' => new Int8_2(),
            'cv_env2_dst2' => new Int8_2(),
            'cv_env1_dep1' => new Int16(),
            'cv_env1_dep2' => new Int16(),
            'cv_env2_dep1' => new Int16(),
            'cv_env2_dep2' => new Int16(),
            'cv_lfo' => new Analog4Lfo(),
            'unknown_14' => new Unknown(4),
            'cv_c_bnd' => new Int8_2(),
            'unknown_15' => new Unknown(6),
            'cv_c_sli' => new Int8_2(),
            'unknown_16' => new Unknown(10),
            'cv_settings' => new Analog4SoundSettings(),
            'cv_portamento' => new Int8_1(['OFF' => 0, 'ON' => 1, 'LEGATO' => 2]),
            'cv_legato_mode' => new Int8_1(['OFF' => 0, 'ON' => 1]),
            'perf_a' => new Analog4Perf(),
            'perf_b' => new Analog4Perf(),
            'perf_c' => new Analog4Perf(),
            'perf_d' => new Analog4Perf(),
            'perf_e' => new Analog4Perf(),
            'perf_f' => new Analog4Perf(),
            'perf_g' => new Analog4Perf(),
            'perf_h' => new Analog4Perf(),
            'perf_i' => new Analog4Perf(),
            'perf_j' => new Analog4Perf(),
            'unknown_17' => new Unknown(76),
            'polycfg_voices' => new Int8_1(range(0, 15)),
            'polycfg_allocation' => new Int8_1(['RESET' => 0, 'ROTATE' => 1, 'REASSIGN' => 2, 'UNISON' => 3]),
            'polycfg_use_trk_sounds' => new Int8_1(['OFF' => 0, 'ON' => 1]),
            'polycfg_unison_detune' => new Int8_1(),
            'polycfg_unison_pan_sprd' => new Int8_1(),
            'routing_to_main' => new Int8_1(range(0, 255)),
            'routing_to_fx' => new Int8_1(range(0, 255)),
            'unknown_18' => new Unknown(3),
        ];
    }

    public function fromSysex(array $data): void {
        // Ensure length
        $this->ensureLen($data, self::LEN);

        // Discard header and footer
        $data = array_slice($data, 10, self::LEN - 10 - 1);

        // Pick off checksum
        $data_len = count($data);
        $cksum_hi = $data[$data_len - 4];
        $cksum_lo = $data[$data_len - 3];
        $cksum = ($cksum_hi << 7) + $cksum_lo;

        // Calc checksum
        $data_to_cksum = array_slice($data, 0, -4);
        $cksum_calc = $this->checksum($data_to_cksum);

        // Ensure checksums match
        if ($cksum_calc !== $cksum) {
            throw new \RuntimeException(sprintf(
                "Expected checksum %d but saw %d",
                $cksum_calc,
                $cksum
            ));
        }

        // Decode 7bit
        $data = $this->decode7bit($data_to_cksum);

        // Discard cksum and length
        // TODO

        // Parse
        parent::fromSysex($data);
    }

    public function toSysex(): array {
        $data = parent::toSysex();

        // Encode 7bit
        $data = $this->encode7bit($data);

        // Add checksum
        $cksum = $this->checksum($data);
        $data[] = ($cksum >> 7) & 0x7f;
        $data[] = $cksum & 0x7f;

        // Add length
        $len = self::LEN - 10;
        $data[] = ($len >> 7) & 0x7f;
        $data[] = $len & 0x7f;

        // Add sysex footer
        $data[] = 0xf7;

        // Add sysex header
        $data = array_merge(array_slice(self::DEFAULT, 0, 10), $data);

        return $data;
    }
}
