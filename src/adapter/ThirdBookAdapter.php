<?php


namespace Duc\Adapter;

/**
 * 为了是 Person 能够读第三方的 book。
 * 但是又不改变 Person 类的结构。
 *
 * Class ThirdBookAdapter
 *
 * @package Duc\Adapter
 */
class ThirdBookAdapter implements ReadBookImp
{
    public $book;

    public function __construct(ThirdBookImp $imp)
    {
        $this->book = $imp;
    }

    public function open()
    {
        return $this->book->turnOn();
    }

    public function read()
    {
        return $this->book->reading();
    }
}
