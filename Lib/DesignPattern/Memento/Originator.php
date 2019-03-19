<?php
/**
 * Created by PhpStorm.
 * User: hayuzi
 * Date: 2019/3/19
 * Time: 下午11:07
 */

namespace Lib\DesignPattern\Memento;

/**
 * 备忘录记录原型类，创建并在Memento对象中存储状态
 * Class Originator
 * @package Lib\DesignPattern\Memento
 */
class Originator
{

    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function saveStateToMemento()
    {
        return new Memento($this->state);
    }

    public function getStateFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}