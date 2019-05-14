<?php


namespace Duc\Facade;

interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch($os);

    public function powerDown();
}
