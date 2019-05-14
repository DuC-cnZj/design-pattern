<?php


namespace Duc\Prototype;

use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /** @test */
    public function test_prototype()
    {
        $p = new Prototype();
        $p->name = 'duc';
        $p->obj = new A();

        $cloneP = clone $p;

        $cloneP->name = 'abc';
        $this->assertSame($cloneP->obj, $p->obj);
        $this->assertNotEquals($p->name, $cloneP->name);
    }

    /** @test */
    public function test_deep_clone()
    {
        $p = new Deep();
        $p->name = 'duc';
        $p->obj = new A();

        $cloneP = clone $p;

        $cloneP->name = 'abc';
        $this->assertNotSame($cloneP->obj, $p->obj);

        $this->assertNotEquals($p->name, $cloneP->name);
    }
}
