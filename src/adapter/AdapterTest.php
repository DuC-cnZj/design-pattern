<?php

namespace Duc\Adapter;

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    /** @test */
    public function test_my_book()
    {
        $person = new Person();

        $result = $person->read(new MyBook());

        $this->assertEquals('open read', $result);
    }

    /** @test */
    public function test_adapter()
    {
        $person = new Person();

        $thirdBook = new ThirdBook();

        // 使用适配器之后我们就能够在不改变原有 Person 类的情况下，去使用第三方的 Book 了
        $result = $person->read(new ThirdBookAdapter($thirdBook));

        $this->assertEquals('turnOn reading', $result);
    }
}
