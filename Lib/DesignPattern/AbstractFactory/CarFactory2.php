<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 16:57
 */

namespace Lib\DesignPattern\AbstractFactory;


abstract class CarFactory2
{
    abstract public function createBenzCar($className);

    abstract public function createBmwCar($className);
}