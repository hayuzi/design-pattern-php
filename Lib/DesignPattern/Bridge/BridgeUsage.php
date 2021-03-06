<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 15:24
 */

namespace Lib\DesignPattern\Bridge;


use Lib\UsageInterface;
use Utils\StringFmt;

class BridgeUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 桥接（Bridge）是用于把抽象化与实现化解耦，使得二者可以独立变化。
         * 这种类型的设计模式属于结构型模式，它通过提供抽象化和实现化之间的桥接结构，来实现二者的解耦。
         * 这种模式涉及到一个作为桥接的接口，使得实体类的功能独立于接口实现类。
         * 这两种类型的类可被结构化改变而互不影响。
         *
         * 类的功能层次结构：父类具有基本功能，在子类中增加新的功能；
         * 类的实现层次结构：父类通过声明抽象方法来定义接口，子类通过实现具体方法来实现接口；
         * 桥接模式中有四个角色：
         *      抽象化角色：使用实现者角色提供的接口来定义基本功能接口。
         *          持有实现者角色，并在功能接口中委托给它，起到搭建桥梁的作用；
         *          注意，抽象化角色并不是指它就是一个抽象类，而是指抽象了实现。
         *      改善后的抽象化角色：作为抽象化角色的子类，增加新的功能，也就是增加新的接口（方法）；与其构成类的功能层次结构；
         *      实现者角色：提供了用于抽象化角色的接口；它是一个抽象类或者接口。
         *      具体的实现者角色：作为实现者角色的子类，通过实现具体方法来实现接口；与其构成类的实现层次结构。
         * 如果抽象和实现两者做不到独立地变化，就不算桥接模式。
         *
         *
         * 优点： 1、抽象和实现的分离。 2、优秀的扩展能力。 3、实现细节对客户透明。
         * 缺点：桥接模式的引入会增加系统的理解与设计难度，由于聚合关联关系建立在抽象层，要求开发者针对抽象进行设计与编程。
         *
         */

        // 例子步骤:
        // 1. 创建桥接实现接口 DrawInterface
        // 2. 创建实现了 DrawInterface 接口的实体桥接实现类 RedCircle GreenCircle
        // 3. 使用 DrawInterface 接口创建抽象类 AbstractShape
        // 4. 创建实现了 AbstractShape 接口的实体类 Circle
        // 5. 使用 Shape 和 DrawInterface 类画出不同颜色的圆

        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Bridge Pattern  ========');
        $redCircle   = new Circle(10, 1, 1, new RedCircle());
        $greenCircle = new Circle(10, 1, 1, new GreenCircle());
        $redCircle->draw();
        $greenCircle->draw();



    }

}