<?php

namespace Duc\Visitor;

class User implements UserImp
{
    public $name = 'duc';

    public $age = 24;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function accept(VisitorImp $imp)
    {
        $imp->visitorUser($this);
    }
}
