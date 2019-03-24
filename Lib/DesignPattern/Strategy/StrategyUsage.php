<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 09:48
 */

namespace Lib\DesignPattern\Strategy;


use Lib\DesignPattern\UsageInterface;
use Utils\StringFmt;

class StrategyUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 在策略模式（Strategy Pattern）中，一个类的行为或其算法可以在运行时更改。
         * 这种类型的设计模式属于行为型模式。
         * 在策略模式中，我们创建表示各种策略的对象和一个行为随着策略对象改变而改变的 context 对象。
         * 策略对象改变 context 对象的执行算法。
         *
         * 优点：1、算法可以自由切换。
         *      2、避免使用多重条件判断。
         *      3、扩展性良好。
         * 缺点：1、策略类会增多。
         *      2、所有策略类都需要对外暴露。
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== Strategy pattern =========");

        $context = new Context(new OperationAdd());
        StringFmt::echoWithEol($context->executeStrategy(4,2));

        $context = new Context(new OperationSubtract());
        StringFmt::echoWithEol($context->executeStrategy(4,2));

    }

}