<?php

namespace Duc\Registry;

/**
 * 单列保证全局只有一个注册树
 *
 * Class SingletonRegistry
 *
 * @package Duc\Registry
 */
class SingletonRegistry
{
    public static $instance;
    protected $pool = [];

    public static function getInstance()
    {
        if (static::$instance instanceof static) {
            return static::$instance;
        }

        static::$instance = new static();

        return static::$instance;
    }

    public function push($class, $obj)
    {
        $this->pool[$class] = $obj;
    }

    public function get($class)
    {
        if (isset($this->pool[$class])) {
            return $this->pool[$class];
        }

        throw new \Exception($class . ' not exists');
    }

    public function getPool()
    {
        return $this->pool;
    }

    public function clearInstance()
    {
        $this->pool = [];
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
