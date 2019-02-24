<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 17:29
 */

namespace Lib\DesignPattern\Composite;


use Lib\DesignPattern\UsageInterface;
use Utils\StringFmt;

class CompositeUsage implements UsageInterface
{


    public static function sample()
    {
        /**
         * 组合模式（Composite Pattern），又叫部分整体模式，是用于把一组相似的对象当作一个单一的对象。
         *  组合模式依据树形结构来组合对象，用来表示部分以及整体层次。这种类型的设计模式属于结构型模式，它创建了对象组的树形结构。
         *
         * 优点： 1、高层模块调用简单。 2、节点自由增加。
         * 缺点：在使用组合模式时，其叶子和树枝的声明都是实现类，而不是接口，违反了依赖倒置原则。
         */

        // 使用 Employee 类来创建和打印员工的层次结构。
        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Composite Pattern  ========');

        $ceo             = new Employee("John", "CEO", 30000);
        $headSales       = new Employee("Robert", "Head Sales", 20000);
        $headMarketing   = new Employee("Michel", "Head Marketing", 20000);
        $clerk1          = new Employee("Laura", "Marketing", 10000);
        $clerk2          = new Employee("Laura", "Marketing", 10000);
        $salesExecutive1 = new Employee("Richard", "Sales", 10000);
        $salesExecutive2 = new Employee("Rob", "Sales", 10000);

        $ceo->add($headSales);
        $ceo->add($headMarketing);
        $headMarketing->add($clerk1);
        $headMarketing->add($clerk2);
        $headSales->add($salesExecutive1);
        $headSales->add($salesExecutive2);


        //打印该组织的所有员工
        StringFmt::echoWithEol($ceo);
        foreach ($ceo->getSubordinates() as $headEmployee) {
            StringFmt::echoWithEol($headEmployee);
            foreach ($headEmployee->getSubordinates() as $employee) {
                StringFmt::echoWithEol($employee);
            }
        }





    }



}