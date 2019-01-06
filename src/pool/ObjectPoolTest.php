<?php


namespace Duc\Pool;


use PHPUnit\Framework\TestCase;

class ObjectPoolTest extends TestCase
{
    /** @test */
    function test_object_has_pool()
    {
        $pool = new Pool();

        $pool->push(Worker::class, new Worker(1));

        $this->assertInstanceOf(Worker::class, $pool->get(Worker::class));
    }

    /** @test */
    function test_object_is_singleton()
    {
        $pool = new Pool();

        $worker = new Worker(1);

        $pool->push(Worker::class, $worker);

        $this->assertSame($worker, $pool->get(Worker::class));

        $this->assertEquals(1, $pool->get(Worker::class)->id);
    }

    /** @test */
    function test_object_is_same()
    {
        $pool = new Pool();

        $workerOne = $pool->get(Worker::class);
        $workerTwo = $pool->get(Worker::class);

        $this->assertSame($workerOne, $workerTwo);
    }

    /** @test */
    function it_only_has_one_same_object_in_pool()
    {
        $pool = new Pool();

        $pool->push(Worker::class, new Worker(1));
        $pool->push(Worker::class, new Worker(1));
        $pool->push(Worker::class, new Worker(1));

        $this->assertEquals(1, count($pool->getInstance()));
    }

    /** @test */
    function it_only_has_one_same_object_in_pool_two()
    {
        $pool = new Pool();

        $pool->push(Worker::class, new Worker(1));
        $pool->push(Worker::class, new Worker(1));
        $pool->push(Worker::class, new Worker(1));

        $pool->push(Manager::class, new Manager(1));

        $this->assertEquals(2, count($pool->getInstance()));
    }

    /** @test */
    function it_only_has_one_same_object_in_pool_three()
    {
        $pool = new Pool();

        $pool->get(Worker::class);
        $pool->get(Manager::class);
        $pool->get(Customer::class);

        $pool->get(Customer::class);

        $this->assertEquals(3, count($pool->getInstance()));
    }
}