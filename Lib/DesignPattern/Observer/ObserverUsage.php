<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/20
 * Time: 12:45
 */

namespace Lib\DesignPattern\Observer;


use Lib\DesignPattern\UsageInterface;

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
         * 观察者模式使用三个类 Subject、Observer 和 Client。
         * Subject 对象带有绑定观察者到 Client 对象和从 Client 对象解绑观察者的方法。
         * 我们创建 Subject 类、Observer 抽象类和扩展了抽象类 Observer 的实体类。
         * ObserverUsage，我们的演示类使用 Subject 和实体类对象来演示观察者模式。
         *
         */


        $subject = new ConcreteSubject();
        $subject->attach(new HexaObserver());
        $subject->attach(new OctalObserver());
        $subject->attach(new BinaryObserver());

        $subject->setState(15);
        $subject->setState(15);


    }

}