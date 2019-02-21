<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 10:58
 */

namespace Lib\DesignPattern\SimpleFactory;


class SimpleFactorySample
{

    /**
     * 简单工厂：工厂类中，这个工厂类提供一个创建具体产品类的方法，可以依照具体参数来创建不同的产品类。 ( 不在23中设计模式中 )
     * 但是简单工厂违反了开闭原则， 不便扩展
     *
     * @throws \Exception
     */
    public static function sample()
    {
        $car = CarSimpleFactory::creteCar('Benz');
        $car->drive();
    }

}