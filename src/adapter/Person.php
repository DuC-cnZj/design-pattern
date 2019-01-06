<?php

namespace Duc\Adapter;

/**
 * 人只能接口我自己写的实现了 ReadBookImp 的类。
 * 适配器模式就是为了解决人能够读另外的第三方的书。
 *
 * Class Person
 *
 * @package Duc\Adapter
 */
class Person
{
    public function read(ReadBookImp $imp)
    {
        $open = $imp->open();
        $read = $imp->read();

        return $open . ' ' . $read;
    }
}
