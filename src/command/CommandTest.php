<?php


namespace Duc\Command;


use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    /** @test */
    function command_test()
    {
        $invoker = new Invoker();
        $hello = $this->createMock(HelloWorldCommand::class);
        $hello->expects($this->once())->method('execute');


        $invoker->setCommand($hello);
        $invoker->run();

        $eat = $this->createMock(EatCommand::class);
        $eat->expects($this->once())->method('execute');
        $invoker->setCommand($eat);
        $invoker->run();
    }
}