<?php

namespace Duc\Proxy;

class RunProxy
{
    protected $run;

    public function __construct()
    {
        $this->run = new Run();
    }

    public function running()
    {
        return 'do sth...' . $this->run->running();
    }
}
