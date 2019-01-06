<?php

namespace Duc\Builder;

class Builder
{
    public function build(BuilderInterface $builder): Bird
    {
        $builder->buildFoot();
        $builder->buildHead();
        $builder->buildWing();

        return $builder->getBird();
    }
}