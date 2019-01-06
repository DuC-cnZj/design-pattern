<?php

namespace Duc\Pool;

use PHPUnit\Framework\TestCase;

class ObjectPoolTest extends TestCase
{
    /** @test */
    public function test_object_has_pool()
    {
        $pool = new Pool();

        for ($i = 0 ; $i < 10; $i++) {
            $pool->push(new Worker($i));
        }

        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertNotSame($worker1, $worker2);
        $this->assertEquals(8, count($pool->getInstance()));

        $pool->push($worker1);
        $pool->push($worker2);

        $this->assertEquals(10, count($pool->getInstance()));
    }

    /** @test */
    public function test_can_get_same_instance_twice_when_disposing_it_first()
    {
        $pool = new Pool();
        $pool->push(new Worker(1));
        $this->assertEquals(1, count($pool->getInstance()));

        $worker1 = $pool->get();
        $pool->push($worker1);
        $worker2 = $pool->get();

        $this->assertSame($worker1, $worker2);
    }
}
