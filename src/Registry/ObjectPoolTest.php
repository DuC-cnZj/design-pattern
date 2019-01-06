<?php


namespace Duc\Registry;


use PHPUnit\Framework\TestCase;

class ObjectPoolTest extends TestCase
{
    /** @test */
    function registry_test()
    {
        Registry::push('worker', new Worker(1));
        Registry::push('manager', new Manager(11));
        Registry::push('customer', new Customer(111));

        $worker = Registry::get('worker');
        $worker1 = Registry::get('worker');

        $this->assertInstanceOf(Worker::class, $worker);
        $this->assertSame($worker1, $worker);
    }

    /** @test */
    function test_duc()
    {
        // 会造成测试中引入全局的状态
        $this->assertEquals(3, count(Registry::getInstance()));
    }
}