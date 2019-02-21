<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 15:41
 */

namespace Lib\DesignPattern\FactoryMethod;

/**
 *
 * Class BenzCarFactory
 * @package Lib\DesignPattern\FactoryMethod
 */
class BenzCarFactory extends CarFactory
{
    /**
     * @return BenzCar
     */
    public function createCar()
    {
        // TODO: Implement createCar() method.
        return new BenzCar();
    }
}