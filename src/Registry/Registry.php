<?php


namespace Duc\Registry;

/**
 * 采用单列或者抽象类
 * 抽象类不能被实例化，不能 new 所以不会产生多个注册树
 *
 * Class Registry
 *
 * @package Duc\Registry
 */
abstract class Registry
{
    protected static $pool = [];

    public static function push($class, $obj)
    {
        static::$pool[$class] = $obj;
    }

    public static function get($class)
    {
        if (isset(static::$pool[$class])) {
            return static::$pool[$class];
        }

        throw new \Exception($class . ' not exists');
    }

    public static function getInstance()
    {
        return static::$pool;
    }

    public static function clearInstance()
    {
        static::$pool = [];
    }
}
