<?php

namespace Duc\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    /** @test */
    function proxy_test()
    {
        $p = new RunProxy();

        $this->assertContains('do sth...', $p->running());
    }
}
