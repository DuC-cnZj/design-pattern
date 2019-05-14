<?php


namespace Duc\Singleton;

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /** @test */
    public function it_has_one_instance()
    {
        $instance = Singleton::getInstance();
        $instanceTwo = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $instance);

        $this->assertSame($instance, $instanceTwo);
    }

    /** @test */
    public function it_can_not_clone()
    {
        $this->expectExceptionMessage('can not clone');

        $instance = Singleton::getInstance();

        $two = clone $instance;
    }
}
