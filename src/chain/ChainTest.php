<?php

namespace Duc\Chain;

use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{
    /** @test */
    public function chain_test()
    {
        $this->expectException(\Exception::class);
        $chinese = \Mockery::mock(ChineseTranslator::class);
        $chinese->makePartial()->shouldReceive('canTranslate')->andReturn(false);

        $spain = \Mockery::mock(SpainTranslator::class);
        $spain->makePartial()->shouldReceive('canTranslate')->andReturn(false);

        $french = \Mockery::mock(FrenchTranslator::class);
        $french->makePartial()->shouldReceive('canTranslate')->andReturn(false);

        $chinese->setTranslator($spain);
        $spain->setTranslator($french);
        $chinese->translate();
    }

    /** @test */
    public function test_translator_french()
    {
        $chinese = \Mockery::mock(ChineseTranslator::class);
        $chinese->makePartial()->shouldReceive('canTranslate')->andReturn(false);

        $spain = \Mockery::mock(SpainTranslator::class);
        $spain->makePartial()->shouldReceive('canTranslate')->andReturn(false);

        $french = \Mockery::mock(FrenchTranslator::class);
        $french->makePartial()->shouldReceive('canTranslate')->andReturn(true);

        $chinese->setTranslator($spain);
        $spain->setTranslator($french);

        $this->assertEquals('法语输出', $chinese->translate());
    }

    /** @test */
    public function test_translator_chinese()
    {
        $chinese = \Mockery::mock(ChineseTranslator::class);
        $chinese->makePartial()->shouldReceive('canTranslate')->andReturn(true);

        $spain = \Mockery::mock(SpainTranslator::class);
        $spain->expects('setTranslator')->andReturnNull();

        $french = \Mockery::mock(FrenchTranslator::class);

        $chinese->setTranslator($spain);
        $spain->setTranslator($french);

        $this->assertEquals('中文翻译输出', $chinese->translate());
    }

    /** @test */
    public function test_translator_spain()
    {
        $chinese = \Mockery::mock(ChineseTranslator::class);
        $chinese->makePartial()->shouldReceive('canTranslate')->andReturn(false);

        $spain = \Mockery::mock(SpainTranslator::class);
        $spain->makePartial()->shouldReceive('canTranslate')->andReturn(true);

        $french = \Mockery::mock(FrenchTranslator::class);

        $chinese->setTranslator($spain);
        $spain->setTranslator($french);

        $this->assertEquals('西班牙语输出', $chinese->translate());
    }
}
