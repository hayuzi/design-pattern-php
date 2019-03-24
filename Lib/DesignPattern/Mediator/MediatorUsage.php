<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/18
 * Time: 14:52
 */

namespace Lib\DesignPattern\Mediator;


use Lib\UsageInterface;
use Utils\StringFmt;

class MediatorUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 中介者模式（Mediator Pattern）是用来降低多个对象和类之间的通信复杂性。
         * 这种模式提供了一个中介类，该类通常处理不同类之间的通信，并支持松耦合，使代码易于维护。
         * 中介者模式属于行为型模式。
         *
         * 优点：1、降低了类的复杂度，将一对多转化成了一对一。
         *      2、各个类之间的解耦。
         *      3、符合迪米特原则。
         * 缺点：中介者会庞大，变得复杂难以维护。
         *
         */

        // 示例，聊天室展示多人聊天信息，相当于一个中介者
        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== Mediator pattern =========");
        $robert = new User('Robert');
        $john   = new User('John');
        $robert->sendMessage("Hi! John!");
        $john->sendMessage("Hello! Robert!");

    }

}