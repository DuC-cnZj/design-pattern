<?php

namespace Duc\Proxy;

class RunProxy implements RunImp
{
    protected $run;

    public function __construct(RunImp $run)
    {
        $this->run = $run;
    }

    public function running()
    {
        return 'do sth...' . $this->run->running();
    }
}
