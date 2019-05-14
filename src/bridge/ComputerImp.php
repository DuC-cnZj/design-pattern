<?php

namespace Duc\Bridge;

interface ComputerImp
{
    public function connectPhone();

    public function choosePhone(PhoneImp $imp);
}
