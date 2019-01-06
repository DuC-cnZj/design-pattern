<?php

namespace Duc\Singleton;

/**
 * 单列模式。
 *
 * Class Singleton
 *
 * @package Duc\Singleton
 */
class Singleton
{
    public static $instance;

    public static function getInstance()
    {
        if (static::$instance instanceof static) {
            return static::$instance;
        }

        static::$instance = new static();

        return static::$instance;
    }

    private function __construct()
    {
    }

    public function __clone()
    {
        throw new \Exception('can not clone');
    }

    public function __wakeup()
    {
        throw new \Exception('can not unserialize');
    }
}
