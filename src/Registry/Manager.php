<?php


namespace Duc\Registry;

class Manager implements UserImp
{
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
