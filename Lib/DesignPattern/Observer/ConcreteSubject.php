<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/21
 * Time: 16:45
 */

namespace Lib\DesignPattern\Observer;

/**
 * 具体的主题
 * Class ConcreteSubject
 * @package Lib\DesignPattern\Observer
 */
class ConcreteSubject extends AbstractSubject
{

    private $observers = [];
    private $state     = 0;

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
        $this->notifyAllObservers();
    }

    /**
     * 增加观察者
     * @param AbstractObserver $observer
     * @return mixed|void
     */
    public function attach(AbstractObserver $observer)
    {
        if (!in_array($observer, $this->observers)) {
            $this->observers[] = $observer;
        }
    }

    /**
     * @param AbstractObserver $observer
     * @return mixed|void
     */
    public function detach(AbstractObserver $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    /**
     * @return mixed|void
     */
    public function notifyAllObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}