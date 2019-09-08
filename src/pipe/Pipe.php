<?php

namespace Duc\pipe;

use Closure;

class Pipe
{
    protected $method = 'handle';

    protected $passable;

    protected $pipes = [];

    public function via($method)
    {
        $this->method = $method;

        return $this;
    }

    public function through($pipes)
    {
        $this->pipes = is_array($pipes) ? $pipes : func_get_args();

        return $this;
    }

    public function send($passable)
    {
        $this->passable = $passable;

        return $this;
    }

    public function then(Closure $destination)
    {
        $pipeline = array_reduce(
            array_reverse($this->pipes),
            $this->carry(),
            $this->prepareDestination($destination)
        );

        return $pipeline($this->passable);
    }

    private function carry()
    {
        return function ($carry, $pipe) {
            return function ($passable) use ($carry, $pipe) {
                if (is_callable($pipe)) {
                    return $pipe($carry, $passable);
                }

                return $pipe->{$this->method}($carry, $passable);
            };
        };
    }

    private function prepareDestination(Closure $destination)
    {
        return function ($passable) use ($destination) {
            return $destination($passable);
        };
    }
}
