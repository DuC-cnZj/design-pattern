<?php

namespace Duc\StaticFactory\Factory;

use Duc\StaticFactory\FruitImp;

class LemonFactory implements FruitImp
{
    /**
     * 种植
     */
    public function plant()
    {
        return 'lemon plant';
    }

    /**
     * 生长
     */
    public function grow()
    {
        return 'lemon grow';
    }

    /**
     * 收获
     */
    public function harvest()
    {
        return 'lemon harvest';
    }
}
