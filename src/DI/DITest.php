<?php

namespace Duc\DI;

use PHPUnit\Framework\TestCase;

class DITest extends TestCase
{
    /** @test */
    public function di_test()
    {
        $bad = new BadPerson();

        $badResult = $bad->book->open();
        $this->assertEquals('oppn', $badResult);

        // 外部注入了 book 类，而不让 Person 类决定使用哪个 book，实现依赖（Book）注入
        // 上面的方法无法修改 Book 类，而导致 book->open() 永远是错误的返回
        // 下面的却可以动态改变，使得返回结果是正确的输出
        $goodBook = new Book();
        $good = new Person($goodBook);

        $goodResult = $good->book->open();

        $this->assertEquals('open', $goodResult);
    }
}
