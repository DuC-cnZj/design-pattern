<?php


namespace Duc\Command;

class HelloWorldCommand implements CommandImp
{
    public function execute()
    {
        echo 'hello world';
    }
}
