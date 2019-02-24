<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 11:04
 */

namespace Lib;


use Lib\DesignPattern\Adapter\AdapterUsage;
use Lib\DesignPattern\Bridge\BridgeUsage;
use Lib\DesignPattern\Builder\BuilderUsage;
use Lib\DesignPattern\AbstractFactory\AbstractFactoryUsage;
use Lib\DesignPattern\Composite\CompositeUsage;
use Lib\DesignPattern\FactoryMethod\FactoryMethodUsage;
use Lib\DesignPattern\Filter\FilterUsage;
use Lib\DesignPattern\Prototype\PrototypeUsage;
use Lib\DesignPattern\SimpleFactory\SimpleFactoryUsage;
use Lib\DesignPattern\Singleton\SingletonUsage;

class Sample
{
    /**
     * 脚本执行
     */
    public static function run()
    {
        try {

            /** ============ 创建型模式 ============ */
            /**
             * 这些设计模式提供了一种在创建对象的同时隐藏创建逻辑的方式，而不是使用 new 运算符直接实例化对象。
             * 这使得程序在判断针对某个给定实例需要创建哪些对象时更加灵活。
             */
            SimpleFactoryUsage::sample();   // 0. 简单工厂  Simple Factory Pattern(不在23种设计模式中)
            FactoryMethodUsage::sample();   // 1. 工厂方法  Factory Method Pattern
            AbstractFactoryUsage::sample(); // 2. 抽象工厂  Abstract Factory Pattern

            SingletonUsage::sample();       // 3. 单例模式      Singleton Pattern
            BuilderUsage::sample();         // 4. 建造者模式     Builder Pattern
            PrototypeUsage::sample();       // 5. 原型模式      Prototype Pattern

            /** ============ 结构型模式 ============ */
            /**
             * 这些设计模式关注类和对象的组合。继承的概念被用来组合接口和定义组合对象获得新功能的方式。
             */
            AdapterUsage::sample();         // 6. 适配器模式     Adapter Pattern
            BridgeUsage::sample();          // 7. 桥接模式      Bridge Pattern
            FilterUsage::sample();          // 8. 过滤器模式     Filter Pattern ( 标准模式 Criteria Pattern )
            CompositeUsage::sample();       // 9. 组合模式      Composite Pattern

            /** ============ 行为型模式 ============ */



            /** ============ J2EE 模式 ============ */


        } catch (\Exception $e) {
            echo $e->getMessage();
            echo "\n";
        }
    }

}