<?php


namespace Duc\NullObject;


class Info
{

    protected $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}