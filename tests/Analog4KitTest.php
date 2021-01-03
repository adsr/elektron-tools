<?php
declare(strict_types=1);

namespace Adsr\Elektron;

class Analog4KitTest extends \PHPUnit\Framework\TestCase {
    public function testIdentity() {
        $kit = new Analog4Kit();
        $kit->fromSysex(Analog4Kit::DEFAULT);
        $bytes = $kit->toSysex();
        $this->assertEquals(Analog4Kit::DEFAULT, $bytes);
    }

    public function testMutate() {
        $kit = new Analog4Kit();

        $kit->set('sound1.amp_vol', 64);
        $this->assertEquals(64, $kit->get('sound1.amp_vol'));

        $kit->set('sound1.osc1_tun', 127);
        $this->assertEquals(127, $kit->get('sound1.osc1_tun'));

        $kit->set('sound1.lfo.lfo1_dep1', 32767);
        $this->assertEquals(32767, $kit->get('sound1.lfo.lfo1_dep1'));

        $kit->set('sound1.name', 'foo');
        $this->assertEquals('foo', $kit->get('sound1.name'));

        $kit->getField('sound1')->set('name', 'bar');
        $this->assertEquals('bar', $kit->get('sound1.name'));
    }
}
