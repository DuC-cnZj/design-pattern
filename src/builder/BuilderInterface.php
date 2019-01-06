<?php


namespace Duc\Builder;


interface BuilderInterface
{
    public function buildHead();
    public function buildWing();
    public function buildFoot();
    public function getBird(): Bird;
}