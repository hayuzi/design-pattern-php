<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 18:13
 */

namespace Lib\DesignPattern\Interpreter;


class OrExpression implements ExpressionInterface
{

    /**
     * @var ExpressionInterface
     */
    private $expr1 = null;

    /**
     * @var ExpressionInterface
     */
    private $expr2 = null;


    /**
     * @param $expr1
     * @param $expr2
     */
    public function __construct($expr1, $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }


    /**
     * @param string $context
     * @return bool
     */
    public function interpret($context)
    {
        return $this->expr1->interpret($context) || $this->expr2->interpret($context);
    }

}