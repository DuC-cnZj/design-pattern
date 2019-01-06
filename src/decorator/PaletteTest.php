<?php


namespace Duc\Decorator;


use PHPUnit\Framework\TestCase;

class PaletteTest extends TestCase
{

    /** @test */
    function palette_test()
    {
        $palette = new Palette();

        $this->assertEquals('color', $palette->getColor());

        $red = new Red($palette);

        $this->assertEquals('red color', $red->getColor());

        $red = new Blue($red);

        $this->assertEquals('blue red color', $red->getColor());
    }
}