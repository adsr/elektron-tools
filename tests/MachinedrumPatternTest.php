<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class MachinedrumPatternTest extends \PHPUnit\Framework\TestCase {
    public function testIdentity() {
        $kit = new MachinedrumPattern();
        $kit->fromSysex(MachinedrumPattern::DEFAULT);
        $bytes = $kit->toSysex();
        $this->assertEquals(MachinedrumPattern::DEFAULT, $bytes);
    }
}
