<?php


namespace Duc\Builder;

abstract class Bird
{
    protected $parts = [];

    public function getParts()
    {
        return $this->parts;
    }

    public function setPart($part, $value)
    {
        $this->parts[$part] = $value;
    }
}
