<?php


namespace Duc\Composite;

class Form implements RenderImp
{
    protected $elements = [];

    protected $renderHtml;

    public function render()
    {
        while ($str = array_shift($this->elements)) {
            $this->renderHtml .= $str;
        }

        return $this->renderHtml;
    }

    public function addElement(ElementImp $imp): RenderImp
    {
        $this->elements[] = $imp->render();

        return $this;
    }
}