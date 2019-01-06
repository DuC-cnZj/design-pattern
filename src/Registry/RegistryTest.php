<?php

namespace Duc\Registry;

use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    protected function setUp(
    )/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        Registry::clearInstance();

        /** @var SingletonRegistry $registry */
        $registry = SingletonRegistry::getInstance();
        $registry->clearInstance();
    }

    /** @test */
    public function registry_test()
    {
        Registry::push('worker', new Worker(1));
        Registry::push('manager', new Manager(1));
        Registry::push('customer', new Customer(1));

        $worker = Registry::get('worker');
        $worker1 = Registry::get('worker');

        $this->assertInstanceOf(Worker::class, $worker);
        $this->assertSame($worker1, $worker);
    }

    /** @test */
    public function test_duc()
    {
        // 会造成测试中引入全局的状态，测试时必须在 setUp 中清空一下注册树
//        $this->assertEquals(3, count(Registry::getInstance()));

        $this->assertEquals(0, count(Registry::getInstance()));
    }

    /** @test */
    public function singleton_registry_test()
    {
        $registry = SingletonRegistry::getInstance();
        $registry1 = SingletonRegistry::getInstance();

        $this->assertSame($registry, $registry1);
        $this->assertInstanceOf(SingletonRegistry::class, $registry);
    }

    /** @test */
    public function singleton_test()
    {
        /** @var SingletonRegistry $registry */
        $registry = SingletonRegistry::getInstance();

        $w = new Worker(1);
        $registry->push('worker', $w);

        $worker = $registry->get('worker');
        $worker1 = $registry->get('worker');

        $this->assertSame($worker, $w);
        $this->assertSame($worker, $worker1);

        $m = new Manager(1);
        $c = new Customer(1);

        $registry->push('manager', $m);
        $registry->push('customer', $c);

        $this->assertEquals(3, count($registry->getPool()));

        $this->expectExceptionMessage('duc not exists');

        $registry->get('duc');
    }

    /** @test */
    function duc_test()
    {
        /** @var SingletonRegistry $registry */
        $registry = SingletonRegistry::getInstance();

        $this->assertEquals(0, count($registry->getPool()));
    }
}
