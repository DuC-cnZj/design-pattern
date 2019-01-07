<?php


namespace Duc\Strategy;


class Vehicle
{
    protected $tool;
    
    public function __construct(StrategyImp $imp)
    {
        $this->tool = $imp;
    }

    public function executeStrategy()
    {
        return $this->tool->run();
    }
}