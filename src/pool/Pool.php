<?php


namespace Duc\Pool;


class Pool
{
    protected $pool = [];

    public function push($class, $obj)
    {
        $this->pool[$class] = $obj;
    }

    public function get($class)
    {
        if (isset($this->pool[$class])) {
            return $this->pool[$class];
        }

        $instance = new $class(random_int(1, 5));
        $this->pool[$class] = $instance;

        return $instance;
    }

    public function getInstance()
    {
        return $this->pool;
    }
}