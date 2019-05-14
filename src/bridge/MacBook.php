<?php

namespace Duc\Bridge;

class MacBook extends Computer
{
    public function connectPhone()
    {
        return 'mac_book ' . $this->phone->connect();
    }
}
