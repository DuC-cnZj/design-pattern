<?php


namespace Duc\DI;


/**
 * 人的书有什么能力不是人这个类决定的，而是外部的注入的类决定的。
 *
 * Class Person
 *
 * @package Duc\DI
 */
class Person
{
    public $book;

    public function __construct(BookImp $imp)
    {
        $this->book = $imp;
    }
}