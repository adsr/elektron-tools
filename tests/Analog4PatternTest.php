<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4PatternTest extends \PHPUnit\Framework\TestCase {
    public function testIdentity() {
        $pattern = new Analog4Pattern();
        $pattern->fromSysex(Analog4Pattern::DEFAULT);
        $bytes = $pattern->toSysex();
        $this->assertEquals(Analog4Pattern::DEFAULT, $bytes);
    }

    public function testMutate() {
        $pattern = new Analog4Pattern();

        $pattern->set('track1.vels.0', 64);
        $this->assertEquals(64, $pattern->get('track1.vels.0'));

        $pattern->getField('track1')->getField('vels')->getField('0')->set(48);
        $this->assertEquals(48, $pattern->get('track1.vels.0'));

        $pattern->getField('track1')->getField('vels')[0]->set(32);
        $this->assertEquals(32, $pattern->get('track1.vels.0'));
    }
}
