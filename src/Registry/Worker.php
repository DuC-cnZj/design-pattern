<?php


namespace Duc\Registry;

class Worker implements UserImp
{
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
