<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:48
 */

namespace Lib\DesignPattern\Flyweight;

use Lib\UsageInterface;
use Utils\StringFmt;

/**
 * Class FlyweightUsage
 * @package Lib\DesignPattern\Flyweight
 */
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

        $shapeFactory = new ShapeFactory();
        $colors       = ["Red", "Green", "Blue", "White", "Black"];

        for ($i = 0; $i < 20; $i++) {
            $circle = $shapeFactory->getCircle($colors[$i % 5]);
            $circle->setX($i);
            $circle->setY($i);
            $circle->setRadius(100);
            $circle->draw();
        }

        /**
         * 享元模式，换句话说就是共享对象，在某些对象需要重复创建，且最终只需要得到单一结果的情况下使用。
         * 因为此种模式是利用先前创建的已有对象，
         * 通过某种规则去判断当前所需对象是否可以利用原有对象做相应修改后得到想要的效果，
         * 如以上的实例，创建了20个不同效果的圆，但相同颜色的圆只需要创建一次便可，
         * 相同颜色的只需要引用原有对象，改变其坐标值便可。此种模式下，同一颜色的圆虽然位置不同，
         * 但其地址都是同一个，所以说此模式适用于结果注重单一结果的情况
         */

    }

}