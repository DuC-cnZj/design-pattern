<?php

namespace Duc\Facade;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class FacadeTest extends TestCase
{
    /** @test */
    public function facade_test()
    {
        /** @var BiosInterface|MockObject $bios */
        $bios = $this->createMock(BiosInterface::class);
        /** @var OsInterface|MockObject $os */
        $os = $this->createMock(OsInterface::class);

        $facade = new Facade($bios, $os);

        $facade->turnOn();

        $os->method('getName')->willReturn('Linux');
        $this->assertEquals('Linux', $os->getName());
    }
}
