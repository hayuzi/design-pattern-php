<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 15:41
 */

namespace Lib\DesignPattern\AbstractFactory;

/**
 * 工厂方法模式，在工厂方法的基础上，扩展出具体的每个产品的创建工厂。
 *      这样在增加新产品的时候，并不需要改动原有代码，只要按照 产品，产品工厂的抽象协议，
 *      添加新的产品，产品工厂类，就可以直接使用
 *
 * Class BenzCarFactory
 * @package Lib\DesignPattern\FactoryMethod
 */
class BenzCarFactory extends CarFactory
{
    /**
     * @return BenzCar
     */
    public static function createCar()
    {
        // TODO: Implement createCar() method.
        return new BenzSportCar();
    }
}