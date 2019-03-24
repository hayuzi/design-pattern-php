<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 20:38
 */

namespace Lib\DesignPattern\Decorator;


use Lib\UsageInterface;
use Utils\StringFmt;

class DecoratorUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 装饰器模式（Decorator Pattern）允许向一个现有的对象添加新的功能，同时又不改变其结构。
         *      这种类型的设计模式属于结构型模式，它是作为现有的类的一个包装。
         *      这种模式创建了一个装饰类，用来包装原有的类，并在保持类方法签名完整性的前提下，提供了额外的功能。
         *
         *
         * 优点：装饰类和被装饰类可以独立发展，不会相互耦合，装饰模式是继承的一个替代模式，装饰模式可以动态扩展一个实现类的功能。
         * 缺点：多层装饰比较复杂。
         */


        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Decorator Pattern  ========');

        $circle       = new Circle();
        $redCircle    = new RedShapeDecorator(new Circle());
        $redRectangle = new RedShapeDecorator(new Rectangle());

        $circle->draw();        // 普通圆
        $redCircle->draw();     // 红色边框装饰普通圆
        $redRectangle->draw();  // 红色边框装饰矩形


    }


}