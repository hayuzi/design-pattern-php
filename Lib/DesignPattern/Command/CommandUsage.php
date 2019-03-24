<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 17:33
 */

namespace Lib\DesignPattern\Command;


use Lib\UsageInterface;
use Utils\StringFmt;

class CommandUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 命令模式（Command Pattern）是一种数据驱动的设计模式，它属于行为型模式。
         * 请求以命令的形式包裹在对象中，并传给调用对象。
         * 调用对象寻找可以处理该命令的合适的对象，并把该命令传给相应的对象，该对象执行命令。
         *
         * 优点： 1、降低了系统耦合度。 2、新的命令可以很容易添加到系统中去。
         * 缺点：使用命令模式可能会导致某些系统有过多的具体命令类。
         *
         * 步骤：
         *  1. 命令接口 OrderInterface
         *  2. 创建一个请求类 Stock
         *  3. 创建实现了 Order 接口的命令实体类 BuyStock SellStock
         *  4. 使用 Broker 类来执行具体的命令请求
         *
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Command Pattern  ========');
        $abcStock       = new Stock();
        $buyStockOrder  = new BuyStock($abcStock);
        $sellStockOrder = new SellStock($abcStock);
        $broker         = new Broker();
        $broker->takeOrder($buyStockOrder);
        $broker->takeOrder($sellStockOrder);
        $broker->placeOrders();

    }

}