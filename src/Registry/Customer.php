<?php


namespace Duc\Registry;


class Customer implements UserImp
{
    public $id;

    /**
     * Customer constructor.
     *
     * @param $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}