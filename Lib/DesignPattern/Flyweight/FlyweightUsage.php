<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:48
 */

namespace Lib\DesignPattern\Facade;

use Lib\DesignPattern\UsageInterface;
use Utils\StringFmt;

class FlyweightUsage implements UsageInterface
{

    public static function sample()
    {
        /***
         *
         * 享元模式（Flyweight Pattern）主要用于减少创建对象的数量，以减少内存占用和提高性能。
         * 这种类型的设计模式属于结构型模式，它提供了减少对象数量从而改善应用所需的对象结构的方式。
         * 享元模式尝试重用现有的同类对象，如果未找到匹配的对象，则创建新对象。
         *
         * 优点：大大减少对象的创建，降低系统的内存，使效率提高。
         * 缺点：提高了系统的复杂度，需要分离出外部状态和内部状态，而且外部状态具有固有化的性质，
         *      不应该随着内部状态的变化而变化，否则会造成系统的混乱。
         * 使用场景： 1、系统有大量相似对象。
         *          2、需要缓冲池的场景。
         * 注意事项： 1、注意划分外部状态和内部状态，否则可能会引起线程安全问题。
         *          2、这些类必须有一个工厂对象加以控制。
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Flyweight Pattern  ========');

        // ......

    }

}