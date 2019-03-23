<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:05
 */

namespace Lib\DesignPattern\State;


use Utils\StringFmt;


/**
 * 具体的状态类 Stop状态
 *
 * Class StopState
 * @package Lib\DesignPattern\State
 */
class StopState implements StateInterface
{

    /**
     *
     */
    public function doAction()
    {
        StringFmt::echoWithEol('State: stop');
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return 'Stop State';
    }

}