<?php

namespace Duc\Visitor;

use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /** @test */
    public function visitor_test()
    {
        $visitor = new Visitor();

        $user = new User();

        $user->accept($visitor);

        $this->assertEquals([
            'name' => $user->name,
            'age'  => $user->age,
        ], $visitor->getNameAndAge());
    }
}
