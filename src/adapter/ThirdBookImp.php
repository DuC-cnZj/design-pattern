<?php

namespace Duc\Adapter;

/**
 * 第三方的 book 接口，我们不能去变动它。
 *
 * Interface ThirdBookImp
 */
interface ThirdBookImp
{
    public function turnOn();

    public function reading();
}
