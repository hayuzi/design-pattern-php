<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:02
 */

namespace Lib\DesignPattern\State;


interface StateInterface
{

    /**
     * @return mixed 状态类对应的具体行为
     */
    public function doAction();

}