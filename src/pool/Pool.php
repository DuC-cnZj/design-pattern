<?php


namespace Duc\Pool;


/**
 * 对象池模式是一种提前准备了一组已经初始化了的对象『池』
 * 对象池一般只存一种对象
 *
 * Class Pool
 *
 * @package Duc\Pool
 */
class Pool
{
    protected $pool = [];

    public function push($obj)
    {
        $hash = spl_object_hash($obj);

        $this->pool[$hash] = $obj;
    }

    public function get()
    {
        if (count($this->pool) > 0) {
            return array_pop($this->pool);
        } else {
            $newWorker = new Worker(random_int(1, 10));

            return $newWorker;
        }
    }

    public function getInstance()
    {
        return $this->pool;
    }
}