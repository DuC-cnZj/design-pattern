<?php


namespace Duc\Decorator;

/**
 * 颜料盘，本来我们的颜料盘中什么颜色都没有。
 *
 * Class Palette
 *
 * @package Duc\Decorator
 */
class Palette implements PaletteImp
{
    public function getColor()
    {
        return 'color';
    }
}
