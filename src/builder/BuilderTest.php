<?php

namespace Duc\Builder;

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /** @test */
    public function blue_bird_test()
    {
        $builder = new Builder();

        $blue = $builder->build(new BlueBird());

        $parts = $blue->getParts();

        $this->assertEquals(
            $parts,
            [
                'head' => 'blue head',
                'wing' => 'blue wing',
                'foot' => 'blue foot',
            ]
        );
    }

    /** @test */
    public function red_bird_test()
    {
        $builder = new Builder();

        $red = $builder->build(new RedBird());

        $parts = $red->getParts();

        $this->assertEquals(
            $parts,
            [
                'head' => 'red head',
                'wing' => 'red wing',
                'foot' => 'red foot',
            ]
        );
    }
}
