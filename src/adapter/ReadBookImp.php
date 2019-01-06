<?php
/**
 * Created by PhpStorm.
 * User: congcong
 * Date: 2019/1/6
 * Time: 上午9:06
 */

namespace Duc\Adapter;

interface ReadBookImp
{
    public function open();

    public function read();
}