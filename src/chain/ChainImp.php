<?php

namespace Duc\Chain;

interface ChainImp
{
    public function setTranslator(ChainImp $imp);

    public function translate();
}
