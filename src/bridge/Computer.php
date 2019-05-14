<?php

namespace Duc\Bridge;

abstract class Computer implements ComputerImp
{
    /**
     * @var PhoneImp
     */
    protected $phone;

    public function choosePhone(PhoneImp $phone)
    {
        $this->phone = $phone;
    }

    abstract public function connectPhone();
}
