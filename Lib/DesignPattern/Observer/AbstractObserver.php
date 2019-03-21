<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/21
 * Time: 16:49
 */

namespace Lib\DesignPattern\Observer;

/**
 * 抽象观察者
 * Class AbstractObserver
 * @package Lib\DesignPattern\Observer
 */
abstract class AbstractObserver
{

    /**
     * 监控事件函数
     * @param $state
     * @return mixed
     */
    public abstract function update($state);

}