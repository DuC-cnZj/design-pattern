<?php

namespace Duc\Composite;

interface RenderImp
{
    public function render();

    public function addElement(ElementImp $imp): RenderImp;
}