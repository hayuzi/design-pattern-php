<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 09:50
 */

namespace Lib\DesignPattern\Strategy;

/**
 * 1. 策略接口（抽象策略角色）
 * Interface StrategyInterface
 * @package Lib\DesignPattern\Strategy
 */
interface StrategyInterface
{

    /**
     * @param $num1
     * @param $num2
     * @return mixed
     */
    public function doOperation($num1, $num2);


}