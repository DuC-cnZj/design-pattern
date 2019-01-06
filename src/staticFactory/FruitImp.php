<?php


namespace Duc\StaticFactory;


interface FruitImp
{
    /**
     * 种植
     */
    public function plant();

    /**
     * 生长
     */
    public function grow();

    /**
     * 收获
     */
    public function harvest();
}