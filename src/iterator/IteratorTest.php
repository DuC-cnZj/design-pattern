<?php


namespace Duc\Iterator;


use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    /** @test */
    function iterator_test()
    {
        $this->assertCount(1, new Iterator());
    }

}