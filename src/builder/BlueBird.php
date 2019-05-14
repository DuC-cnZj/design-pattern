<?php


namespace Duc\Builder;

class BlueBird extends Bird implements BuilderInterface
{
    public function buildHead()
    {
        $this->setPart('head', 'blue head');
    }

    public function buildWing()
    {
        $this->setPart('wing', 'blue wing');
    }

    public function buildFoot()
    {
        $this->setPart('foot', 'blue foot');
    }

    public function getBird(): Bird
    {
        return $this;
    }
}
