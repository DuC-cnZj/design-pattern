<?php


namespace Duc\Strategy;

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /** @test */
    public function strategy_test()
    {
        $bike = new Bike();
        $vehicle = new Vehicle($bike);

        $this->assertEquals('bike run', $vehicle->executeStrategy());

        $car = new Car();
        $vehicle = new Vehicle($car);

        $this->assertEquals('car run', $vehicle->executeStrategy());
    }
}
