<?php
/**
 * Created by PhpStorm.
 * User: hayuzi
 * Date: 2019/3/19
 * Time: 下午11:10
 */

namespace Lib\DesignPattern\Memento;

/**
 * 接收者对象负责从 Memento 中恢复对象的状态。
 *
 * Class CareTaker
 * @package Lib\DesignPattern\Memento
 */
class CareTaker
{

    private $mementoList = [];


    public function add(Memento $state)
    {
        $this->mementoList[] = $state;
    }


    public function get($index)
    {
        return $this->mementoList[$index];
    }
}