<?php

namespace Duc\pipe;

use PHPUnit\Framework\TestCase;

class PipeTest extends TestCase
{
    public function testPipe()
    {
        $stdClass = new \StdClass;
        $p = new Pipe();
        $p->through(new Handler1(), new Handler2())
            ->send($stdClass)
            ->then(function ($pass) {
                $pass->pipeData[] = 'core';
            });

        $this->assertEquals([
            'h1',
            'core',
            'h2',
        ], $stdClass->pipeData);
    }

    public function testPipeVia()
    {
        $stdClass = new \StdClass;
        $p = new Pipe();
        $p->through(new Handler1(), new Handler2())
            ->via('send')
            ->send($stdClass)
            ->then(function ($pass) {
                $pass->pipeData[] = 'core';
            });

        $this->assertEquals([
            'send-h1',
            'core',
            'send-h2',
        ], $stdClass->pipeData);
    }

    public function testPipeCallback()
    {
        $stdClass = new \StdClass;
        $p = new Pipe();
        $p->through(new Handler1(), new Handler2(), function ($closure, $pass) {
            $pass->pipeData[] = 'closure';

            return $closure($pass);
        })
            ->send($stdClass)
            ->then(function ($pass) {
                $pass->pipeData[] = 'core';
            });

        $this->assertEquals([
            'h1',
            'closure',
            'core',
            'h2',
        ], $stdClass->pipeData);
    }
}

class Handler1
{
    public function handle($closure, $pass)
    {
        $pass->pipeData[] = 'h1';

        return $closure($pass);
    }

    public function send($closure, $pass)
    {
        $pass->pipeData[] = 'send-h1';

        return $closure($pass);
    }
}

class Handler2
{
    public function handle($closure, $pass)
    {
        $res = $closure($pass);

        $pass->pipeData[] = 'h2';

        return $res;
    }

    public function send($closure, $pass)
    {
        $res = $closure($pass);

        $pass->pipeData[] = 'send-h2';

        return $res;
    }
}
