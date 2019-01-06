<?php

namespace Duc\StaticFactory;

use PHPUnit\Framework\TestCase;
use Duc\StaticFactory\Factory\AppleFactory;
use Duc\StaticFactory\Factory\LemonFactory;

class StaticFactoryTest extends TestCase
{
    /** @test */
    public function it_can_create_apple_factory()
    {
        $factory = StaticFactory::factory('apple');

        $this->assertInstanceOf(AppleFactory::class, $factory);

        $this->assertEquals('apple grow', $factory->grow());
        $this->assertEquals('apple harvest', $factory->harvest());
        $this->assertEquals('apple plant', $factory->plant());
    }

    /** @test */
    public function it_can_create_lemon_factory()
    {
        $factory = StaticFactory::factory('lemon');

        $this->assertInstanceOf(LemonFactory::class, $factory);

        $this->assertEquals('lemon grow', $factory->grow());
        $this->assertEquals('lemon harvest', $factory->harvest());
        $this->assertEquals('lemon plant', $factory->plant());
    }

    /** @test */
    public function it_can_not_create_not_exist_factory()
    {
        $this->expectException(FactoryNotExistException::class);

        StaticFactory::factory('not_exist');
    }
}
