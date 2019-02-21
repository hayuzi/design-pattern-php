<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 16:32
 */

namespace Lib\DesignPattern\AbstractFactory;


class SportCarFactory extends CarFactory
{

    public function createBenzCar()
    {
        // TODO: Implement createBenzCar() method.
        return new BenzSportCar();
    }

    public function createBmwCar()
    {
        // TODO: Implement createBmwCar() method.
        return new BmwSportCar();
    }

}