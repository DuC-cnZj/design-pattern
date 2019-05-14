<?php


namespace Duc\Builder;

class RedBird extends Bird implements BuilderInterface
{
    public function buildHead()
    {
        $this->setPart('head', 'red head');
    }

    public function buildWing()
    {
        $this->setPart('wing', 'red wing');
    }

    public function buildFoot()
    {
        $this->setPart('foot', 'red foot');
    }

    public function getBird(): Bird
    {
        return $this;
    }
}
