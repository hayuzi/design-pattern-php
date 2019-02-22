<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 11:04
 */

namespace Lib;


use Lib\DesignPattern\AbstractFactory\AbstractFactoryUsage;
use Lib\DesignPattern\FactoryMethod\FactoryMethodUsage;
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
            SimpleFactoryUsage::sample();   // 0. 简单工厂  Simple Factory Pattern(不在23种设计模式中)
            FactoryMethodUsage::sample();   // 1. 工厂方法  Factory Method Pattern
            AbstractFactoryUsage::sample(); // 2. 抽象工厂  Abstract Factory Pattern

            SingletonUsage::sample();       // 3. 单例模式  Singleton Pattern


            /** ============ 结构型模式 ============ */



            /** ============ 行为型模式 ============ */



            /** ============ J2EE 模式 ============ */


        } catch (\Exception $e) {
            echo $e->getMessage();
            echo "\n";
        }
    }

}