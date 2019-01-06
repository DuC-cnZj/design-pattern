<?php

namespace Duc\DI;

class BadBook implements BookImp
{
    public function open()
    {
        return 'oppn';
    }
}
