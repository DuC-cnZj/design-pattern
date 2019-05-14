<?php


namespace Duc\Decorator;

class Blue implements PaletteImp
{
    protected $palette;

    public function __construct(PaletteImp $imp)
    {
        $this->palette = $imp;
    }

    public function getColor()
    {
        return 'blue ' . $this->palette->getColor();
    }
}
