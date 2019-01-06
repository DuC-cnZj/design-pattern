<?php


namespace Duc\DI;

class Book implements BookImp
{
    public function open()
    {
        return 'open';
    }
}
