<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/21
 * Time: 17:08
 */

namespace Lib\DesignPattern\Observer;

/**
 * 抽象主题
 * Class AbstractSubject
 * @package Lib\DesignPattern\Observer
 */
abstract class AbstractSubject
{

    /**
     * 增加观察者
     * @param AbstractObserver $observer
     * @return mixed
     */
    abstract public function attach(AbstractObserver $observer);

    /**
     * 删除观察者
     * @param AbstractObserver $observer
     * @return mixed
     */
    abstract public function detach(AbstractObserver $observer);

    /**
     * 通知观察者
     * @return mixed
     */
    abstract public function notifyAllObservers();

}