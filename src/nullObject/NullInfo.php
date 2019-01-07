<?php


namespace Duc\NullObject;


class NullInfo
{
    protected $userId = null;

    public function getUserId()
    {
        return $this->userId;
    }
}