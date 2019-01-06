<?php


namespace Duc\Composite;


use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    /** @test */
    function test_composite()
    {
        $form = new Form();

        $textarea = new Textarea();
        $input = new Input();
        $result = $form->addElement($textarea)
            ->addElement($textarea)
            ->addElement($input)
            ->render();

        $this->assertEquals(
            "<textarea></textarea>\n<textarea></textarea>\n<input type='text' value='inout'>\n",
            $result
        );
    }
}