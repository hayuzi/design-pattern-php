<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 10:00
 */

namespace Lib\DesignPattern\Strategy;

/**
 * 2. 乘法策略 （具体策略角色）
 * Class OperationMultiply
 * @package Lib\DesignPattern\Strategy
 */
class OperationMultiply implements StrategyInterface
{

    public function doOperation($num1, $num2)
    {
        return $num1 * $num2;
    }

}