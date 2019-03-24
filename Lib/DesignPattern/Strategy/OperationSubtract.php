<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 09:54
 */

namespace Lib\DesignPattern\Strategy;

/**
 * 2. 减法策略（具体策略角色）
 *
 * Class OperationSubtract
 * @package Lib\DesignPattern\Strategy
 */
class OperationSubtract implements StrategyInterface
{

    public function doOperation($num1, $num2)
    {
        return $num1 - $num2;
    }

}