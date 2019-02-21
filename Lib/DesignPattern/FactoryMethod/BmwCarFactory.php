<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 15:42
 */

namespace Lib\DesignPattern\FactoryMethod;


class BmwCarFactory extends CarFactory
{


    public function createCar()
    {
        // TODO: Implement createCar() method.
        return new BmwCar();
    }

}