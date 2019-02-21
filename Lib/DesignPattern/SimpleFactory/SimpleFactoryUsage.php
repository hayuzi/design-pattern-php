<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 10:58
 */

namespace Lib\DesignPattern\SimpleFactory;


class SimpleFactoryUsage
{

    /**
     * 简单工厂的调用示例
     *
     * @throws \Exception
     */
    public static function sample()
    {
        $car = CarSimpleFactory::creteCar('Benz');
        $car->drive();
    }

}