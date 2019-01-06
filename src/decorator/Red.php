<?php


namespace Duc\Decorator;


class Red implements PaletteImp
{
    protected $palette;

    public function __construct(PaletteImp $imp)
    {
        $this->palette = $imp;
    }

    public function getColor()
    {
        return 'red ' . $this->palette->getColor();
    }
}