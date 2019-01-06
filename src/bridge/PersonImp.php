<?php

namespace Duc\Bridge;

interface PersonImp
{
    public function chooseComputer(ComputerImp $imp): PersonImp;

    public function choosePhone(PhoneImp $imp): PersonImp;

    public function connect();
}
