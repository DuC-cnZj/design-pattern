<?php

namespace Duc\Observer;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class ObserverTest extends TestCase
{
    /** @test */
    public function observer_test()
    {
        $observer = new Observer();

        /** @var HandlerOne|MockObject $handleOne */
        $handleOne = $this->createMock(HandlerOne::class);
        /** @var HandleTwo|MockObject $handleTwo */
        $handleTwo = $this->createMock(HandleTwo::class);

        $handleOne->expects($this->once())->method('update');
        $handleTwo->expects($this->never())->method('update');

        $observer->attach($handleOne);
//        $observer->attach($handleTwo);

        $observer->notify();
    }
}
