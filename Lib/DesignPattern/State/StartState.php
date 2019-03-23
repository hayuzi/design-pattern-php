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
 * 具体的状态类 Start状态
 *
 * Class StartState
 * @package Lib\DesignPattern\State
 */
class StartState implements StateInterface
{

    /**
     *
     */
    public function doAction()
    {
        StringFmt::echoWithEol('State: start');
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return 'Start State';
    }

}