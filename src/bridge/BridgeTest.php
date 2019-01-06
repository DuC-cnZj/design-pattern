<?php

namespace Duc\Bridge;

use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    /** @test */
    public function test_bridge()
    {
        $person = new Person();
        $dell = new Dell();
        $macBook = new MacBook();
        $xiaoMi = new XIaoMi();
        $iphone = new Iphone();

        $result = $person->chooseComputer($macBook)
            ->choosePhone($xiaoMi)
            ->connect();

        $this->assertEquals('mac_book xiao_mi connect', $result);

        $result = $person->chooseComputer($dell)
            ->choosePhone($xiaoMi)
            ->connect();

        $this->assertEquals('dell xiao_mi connect', $result);

        $result = $person->chooseComputer($macBook)
            ->choosePhone($iphone)
            ->connect();

        $this->assertEquals('mac_book iphone connect', $result);

        $result = $person->chooseComputer($dell)
            ->choosePhone($iphone)
            ->connect();

        $this->assertEquals('dell iphone connect', $result);
    }
}
