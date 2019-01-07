<?php

namespace Duc\Visitor;

class Visitor implements VisitorImp
{
    protected $user;

    public function visitorUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getNameAndAge()
    {
        return ['name' => $this->user->name, 'age' => $this->user->age];
    }
}
