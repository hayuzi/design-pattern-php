<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:48
 */

namespace Lib\DesignPattern\Facade;


use Lib\UsageInterface;
use Utils\StringFmt;

class FacadeUsage implements UsageInterface
{

    public static function sample()
    {
        /***
         *
         * 外观模式（Facade Pattern）隐藏系统的复杂性，并向客户端提供了一个客户端可以访问系统的接口。
         * 这种类型的设计模式属于结构型模式，它向现有的系统添加一个接口，来隐藏系统的复杂性。
         * 这种模式涉及到一个单一的类，该类提供了客户端请求的简化方法和对现有系统类方法的委托调用。
         *
         * 优点： 1、减少系统相互依赖。 2、提高灵活性。 3、提高了安全性。
         * 缺点：不符合开闭原则，如果要改东西很麻烦，继承重写都不合适。
         *
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Facade Pattern  ========');

        // 开启、关闭电脑作为示例
        $computer = new ComputerFacade();
        $computer->start();
        $computer->stop();

    }

}