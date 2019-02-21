<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 17:01
 */

namespace Lib\DesignPattern\AbstractFactory;


class SimpleAndAbstractCarFactory extends CarFactory2
{

    /**
     * @param $className
     * @return Car
     */
    public function createBenzCar($className)
    {
        // TODO: Implement createBenzCar() method.
        return new $className;
    }


    public function createBmwCar($className)
    {
        // TODO: Implement createBmwCar() method.
        return new $className;
    }

}