<?php

namespace Duc\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    /** @test */
    public function proxy_test()
    {
        $p = new RunProxy(new Run());

        $this->assertContains('do sth...', $p->running());
    }
}
