<?php


namespace Duc\Prototype;

class Deep
{
    public $name;

    /**
     * @var A
     */
    public $obj;

    public function __clone()
    {
        $this->obj = clone $this->obj;
    }
}
