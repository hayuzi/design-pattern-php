<?php
/**
 * Created by PhpStorm.
 * User: hayuzi
 * Date: 2019/3/19
 * Time: 下午11:05
 */

namespace Lib\DesignPattern\Memento;

/***
 * 备忘录 包含了要被恢复的对象的状态
 *
 * Class Memento
 * @package Lib\DesignPattern\Memento
 */
class Memento
{

    private $state;


    public function __construct($state)
    {
        $this->state = $state;
    }


    public function getState()
    {
        return $this->state;
    }

}