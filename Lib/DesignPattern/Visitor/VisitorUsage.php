<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 15:56
 */

namespace Lib\DesignPattern\Visitor;


use Lib\UsageInterface;
use Utils\StringFmt;

class VisitorUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 在访问者模式（Visitor Pattern）中，我们使用了一个访问者类，它改变了元素类的执行算法。
         * 通过这种方式，元素的执行算法可以随着访问者改变而改变。
         * 这种类型的设计模式属于行为型模式。
         *
         * 根据模式，元素对象已接受访问者对象，这样访问者对象就可以处理元素对象上的操作。
         *
         *
         * 优点：1、符合单一职责原则。
         *      2、优秀的扩展性。
         *      3、灵活性。
         * 缺点：1、具体元素对访问者公布细节，违反了迪米特原则。
         *      2、具体元素变更比较困难。
         *      3、违反了依赖倒置原则，依赖了具体类，没有依赖抽象。
         *
         * 访问者模式主要包含以下几个角色：
         *      抽象访问者：抽象类或者接口，声明访问者可以访问哪些元素，具体到程序中就是visit方法中的参数定义哪些对象是可以被访问的。
         *      访问者：实现抽象访问者所声明的方法，它影响到访问者访问到一个类后该干什么，要做什么事情。
         *      抽象元素类：接口或者抽象类，声明接受哪一类访问者访问，程序上是通过accept方法中的参数来定义的。
         *          抽象元素一般有两类方法，一部分是本身的业务逻辑，另外就是允许接收哪类访问者来访问。
         *      元素类：实现抽象元素类所声明的accept方法，通常都是visitor.visit(this)，基本上已经形成一种定式了。
         *      结构对象：一个元素的容器，一般包含一个容纳多个不同类、不同接口的容器，
         *          如List、Set、Map等，在项目中一般很少抽象出这个角色。
         *
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== Visitor pattern =========");

        $list = ObjectStructure::getList();
        foreach ($list as $element) {
            /** @var $element AbstractElement */
            $element->accept(new Visitor());
        }

    }


}