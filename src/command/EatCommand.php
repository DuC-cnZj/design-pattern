<?php


namespace Duc\Command;


class EatCommand implements CommandImp
{

    protected $food;

    public function __construct($food)
    {
        $this->food = $food;
    }

    public function execute()
    {
        return 'eat ' . $this->food;
    }
}