<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 15:03
 */

namespace Lib\DesignPattern\FactoryMethod;

/**
 * 奔驰汽车类
 *
 * Class BenzCar
 * @package Lib\DesignPattern\SimpleFactory
 */
class BenzCar extends Car
{

    public function drive()
    {
        // TODO: Implement drive() method.
        echo "FactoryMethod BenzCar drive \n";
    }

}