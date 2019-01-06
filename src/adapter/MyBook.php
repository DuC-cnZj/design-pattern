<?php

namespace Duc\Adapter;

class MyBook implements ReadBookImp
{
    public function open()
    {
        return 'open';
    }

    public function read()
    {
        return 'read';
    }
}
