<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 18:07
 */

namespace Lib\DesignPattern\Interpreter;


class TerminalExpression implements ExpressionInterface
{

    /**
     * @var string
     */
    private $data;

    /**
     * TerminalExpression constructor.
     * @param string $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * @param string $context
     * @return bool
     */
    public function interpret($context)
    {
        return (strpos($context, $this->data) !== false);
    }

}