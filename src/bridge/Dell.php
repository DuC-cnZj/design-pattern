<?php

namespace Duc\Bridge;

class Dell extends Computer
{
    public function connectPhone()
    {
        return 'dell ' . $this->phone->connect();
    }
}
