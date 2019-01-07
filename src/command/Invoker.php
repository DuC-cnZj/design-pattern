<?php

namespace Duc\Command;

class Invoker
{
    /**
     * @var CommandImp
     */
    protected $command;

    public function setCommand(CommandImp $imp)
    {
        $this->command = $imp;
    }

    public function run()
    {
        $this->command->execute();
    }
}
