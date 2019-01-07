<?php

namespace Duc\Chain;

abstract class BaseTranslator implements ChainImp
{
    /**
     * @var null|ChainImp
     */
    protected $translator = null;

    public function setTranslator(ChainImp $imp)
    {
        $this->translator = $imp;
    }

    abstract public function translate();

    abstract public function canTranslate();
}
