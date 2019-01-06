<?php


namespace Duc\Pool;


class Manager implements UserImp
{
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}