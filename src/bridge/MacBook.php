<?php

namespace Duc\Bridge;

class MacBook extends Composer
{
    public function connectPhone()
    {
        return 'mac_book ' . $this->phone->connect();
    }
}
