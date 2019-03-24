<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 10:01
 */

namespace Lib\DesignPattern\Strategy;

/**
 * 3. 环境(Context)角色：持有一个Strategy的引用。
 * Class Context
 * @package Lib\DesignPattern\Strategy
 */
class Context
{

    /**
     * @var StrategyInterface
     */
    private $strategy;


    /**
     * Context constructor.
     * @param StrategyInterface $strategy
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }


    /**
     * 策略方法
     *
     * @param $num1
     * @param $num2
     * @return mixed
     */
    public function executeStrategy($num1, $num2)
    {
        return $this->strategy->doOperation($num1, $num2);
    }

}