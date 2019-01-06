<?php

namespace Duc\Bridge;

/**
 * 人就是桥 bridge，人把电脑和手机连接在一起。
 * 手机和电脑只需要实现相应的接口就可以在自己的维度不断扩增。
 *
 * Class Person
 *
 * @package Duc\Bridge
 */
class Person implements PersonImp
{
    /**
     * @var ComputerImp
     */
    protected $computer;

    /**
     * @var PhoneImp
     */
    protected $phone;

    public function chooseComputer(ComputerImp $imp): PersonImp
    {
        $this->computer = $imp;

        return $this;
    }

    public function choosePhone(PhoneImp $imp): PersonImp
    {
        $this->phone = $imp;

        return $this;
    }

    public function connect()
    {
        if (is_null($this->phone) || is_null($this->computer)) {
            throw new \Exception('请先选择电脑或手机！');
        }

        $this->computer->choosePhone($this->phone);

        return $this->computer->connectPhone();
    }
}
