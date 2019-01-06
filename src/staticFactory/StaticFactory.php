<?php

namespace Duc\StaticFactory;

/**
 * 静态工厂模式。
 *
 * Class StaticFactory
 *
 * @package Duc\StaticFactory
 *
 * @throw FactoryNotExistException
 */
class StaticFactory
{
    public static function factory($type): FruitImp
    {
        $type = ucfirst(strtolower($type));

        $factory = "Duc\StaticFactory\Factory\\{$type}Factory";

        if (class_exists($factory)) {
            return new $factory;
        }

        throw new FactoryNotExistException;
    }
}