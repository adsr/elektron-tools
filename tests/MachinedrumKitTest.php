<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class MachinedrumKitTest extends \PHPUnit\Framework\TestCase {
    public function testIdentity() {
        $kit = new MachinedrumKit();
        $kit->fromSysex(MachinedrumKit::DEFAULT);
        $bytes = $kit->toSysex();
        $this->assertEquals(MachinedrumKit::DEFAULT, $bytes);
    }
}
