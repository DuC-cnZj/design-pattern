<?php

namespace Duc\NullObject;

/**
 * laravel 中的 withDefault()
 *
 * Class User
 *
 * @package Duc\NullObject
 */
class User
{
    protected $userIds = [1, 2, 3];

    public function getInfoById(int $id)
    {
        if (in_array($id, $this->userIds)) {
            return new Info($id);
        } else {
            return new NullInfo();
        }
    }
}
