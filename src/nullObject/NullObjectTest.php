<?php


namespace Duc\NullObject;


use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    /** @test */
    function null_test()
    {
        $u = new User();
        $info = $u->getInfoById(999);

        $this->assertSame(null, $info->getUserId());
    }
}