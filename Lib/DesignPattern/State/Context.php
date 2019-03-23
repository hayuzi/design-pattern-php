<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:03
 */

namespace Lib\DesignPattern\State;

/**
 * 上下文选项类，
 * 持有单个状态的对象，当状态切换时候，持有的对象也切换，
 * 这样可以执行不同状态下的不同行为
 *
 * Class Context
 * @package Lib\DesignPattern\State
 */
class Context
{

    /**
     * @var StateInterface
     */
    private $state;


    /**
     * @param StateInterface $state
     */
    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }


    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }


    /**
     * 执行具体的行为
     */
    public function action(){
        $this->state->doAction();
    }


}