<?php

namespace Duc\StaticFactory\Factory;

use Duc\StaticFactory\FruitImp;

class AppleFactory implements FruitImp
{
    /**
     * 种植
     */
    public function plant()
    {
        return 'apple plant';
    }

    /**
     * 生长
     */
    public function grow()
    {
       return 'apple grow';
    }

    /**
     * 收获
     */
    public function harvest()
    {
        return 'apple harvest';
    }
}