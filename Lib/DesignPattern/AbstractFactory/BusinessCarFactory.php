<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 15:42
 */

namespace Lib\DesignPattern\AbstractFactory;


class BusinessCarFactory extends CarFactory
{


    public function createBenzCar()
    {
        // TODO: Implement createBenzCar() method.
        return new BenzBusinessCar();
    }

    public function createBmwCar()
    {
        // TODO: Implement createBmwCar() method.
        return new BmwBusinessCar();
    }

}