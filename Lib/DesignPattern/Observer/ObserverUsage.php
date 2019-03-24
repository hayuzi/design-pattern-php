<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/20
 * Time: 12:45
 */

namespace Lib\DesignPattern\Observer;


use Lib\UsageInterface;
use Utils\StringFmt;

class ObserverUsage implements UsageInterface
{

    public static function sample()
    {

        /**
         * 当对象间存在一对多关系时，则使用观察者模式（Observer Pattern）。
         * 比如，当一个对象被修改时，则会自动通知它的依赖对象。
         * 观察者模式属于行为型模式。
         *
         * 优点：1、观察者和被观察者是抽象耦合的。
         *      2、建立一套触发机制。
         * 缺点：1、如果一个被观察者对象有很多的直接和间接的观察者的话，将所有的观察者都通知到会花费很多时间。
         *      2、如果在观察者和观察目标之间有循环依赖的话，观察目标会触发它们之间进行循环调用，可能导致系统崩溃。
         *      3、观察者模式没有相应的机制让观察者知道所观察的目标对象是怎么发生变化的，而仅仅只是知道观察目标发生了变化。
         *
         *
         * 观察者模式使用四个类
         * 1. 抽象的主题 AbstractSubject 被观察者的抽象类
         * 2. 具体的主题 ConcreteSubject 这个是被观察的主体 （发布）
         * 3. 抽象的观察者 AbstractObserver 定义了具体的事件方法
         * 4. 具体的各个观察者（ 订阅 ）
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== Observer pattern =========");
        $subject = new ConcreteSubject();
        $subject->attach(new HexaObserver());
        $subject->attach(new OctalObserver());
        $subject->attach(new BinaryObserver());

        // 更新之后会通知到每个观察者.
        $subject->setState(8);
        $subject->setState(15);
        $subject->setState(21);


    }

}