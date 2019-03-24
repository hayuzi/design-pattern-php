<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 09:52
 */

namespace Lib\DesignPattern\Strategy;

/**
 * 2. 加法策略  （具体策略角色）
 *
 * Class OperationAdd
 * @package Lib\DesignPattern\Strategy
 */
class OperationAdd implements StrategyInterface
{

    /**
     * @param $num1
     * @param $num2
     * @return mixed
     */
    public function doOperation($num1, $num2)
    {
        return $num1 + $num2;
    }

}