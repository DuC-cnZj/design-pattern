<?php


namespace Duc\DI;


/**
 * $this->book = new BadBook(); 形成了依赖。
 * 将来人想做什么都只能限制在 BadBook 类的方法里面。
 * 我这里的 BadBook 故意写错了，把 open 方法返回值 写成 'oppn'
 *
 *
 * Class BadPerson
 *
 * @package Duc\DI
 */
class BadPerson
{
    public $book;

    public function __construct()
    {
        $this->book = new BadBook();
    }
}