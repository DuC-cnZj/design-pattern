<?php

namespace Duc\Bridge;

class Dell extends Composer
{
    public function connectPhone()
    {
        return 'dell ' . $this->phone->connect();
    }
}
