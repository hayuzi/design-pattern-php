<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/21
 * Time: 16:45
 */

namespace Lib\DesignPattern\Observer;

use Utils\StringFmt;

/**
 * 具体的主题
 * Class ConcreteSubject
 * @package Lib\DesignPattern\Observer
 */
class ConcreteSubject extends AbstractSubject
{

    /**
     * 观察者列表
     * @var array
     */
    protected $observers = [];

    /**
     * 状态
     * @var int
     */
    protected $state     = 0;

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * 更新状态的时候通知到所有观察者
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
        StringFmt::echoWithEol('-------- On state update: ' . $this->state . '-------');
        foreach ($this->observers as $observer) {
            $observer->update($this->state);
        }
    }
}