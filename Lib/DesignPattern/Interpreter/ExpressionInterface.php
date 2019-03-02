<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 18:05
 */

namespace Lib\DesignPattern\Interpreter;


/**
 * Interface ExpressionInterface
 * @package Lib\DesignPattern\Interpreter
 */
interface ExpressionInterface
{

    /**
     * @param string $context
     * @return bool
     */
    public function interpret($context);

}