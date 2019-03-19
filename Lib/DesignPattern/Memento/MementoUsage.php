<?php
/**
 * Created by PhpStorm.
 * User: hayuzi
 * Date: 2019/3/19
 * Time: 下午11:02
 */

namespace Lib\DesignPattern\Memento;


use Lib\DesignPattern\UsageInterface;
use Utils\StringFmt;

class MementoUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 备忘录模式（Memento Pattern）保存一个对象的某个状态，以便在适当的时候恢复对象。
         * 备忘录模式属于行为型模式。
         *
         * 优点： 1、给用户提供了一种可以恢复状态的机制，可以使用户能够比较方便地回到某个历史的状态。
         *      2、实现了信息的封装，使得用户不需要关心状态的保存细节。
         * 缺点：消耗资源。如果类的成员变量过多，势必会占用比较大的资源，而且每一次保存都会消耗一定的内存。
         *
         *
         * 注意事项： 1、为了符合迪米特原则，还要增加一个管理备忘录的类。
         *          2、为了节约内存，可使用原型模式+备忘录模式。
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== Memento pattern =========");
        $originator = new Originator();
        $careTaker = new CareTaker();
        $originator->setState("State #1");
        $originator->setState("State #2");
        $careTaker->add($originator->saveStateToMemento());  // 管理类持有备忘录类（备忘录类中记录了状态）
        $originator->setState("State #3");
        $careTaker->add($originator->saveStateToMemento());
        $originator->setState("State #4");
        $careTaker->add($originator->saveStateToMemento());

        StringFmt::echoWithEol("Current State: " . $originator->getState());
        $originator->getStateFromMemento($careTaker->get(0)); // 从管理类中获取固定索引的状态
        StringFmt::echoWithEol("First saved State: " . $originator->getState());
        $originator->getStateFromMemento($careTaker->get(1));
        StringFmt::echoWithEol("Second saved State: " . $originator->getState());

    }

}