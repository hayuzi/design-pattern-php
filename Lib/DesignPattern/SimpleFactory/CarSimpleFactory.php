<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 15:05
 */

namespace Lib\DesignPattern\SimpleFactory;

/**
 * 简单汽车工厂
 *
 * 简单工厂：工厂类中，提供一个创建具体产品类的方法，可以依照具体参数来创建不同的产品类。 ( 不在23中设计模式中 )
 * 但是简单工厂违反了开闭原则， 不便扩展
 *
 * Class CarFactory
 * @package Lib\DesignPattern\SimpleFactory
 */
class CarSimpleFactory
{

    /**
     * @param $carBrand
     * @return BenzCar|BmwCar|null
     * @throws \Exception
     */
    public static function creteCar($carBrand)
    {
        $car = null;
        switch ($carBrand) {
            case 'Benz':
                $car = new BenzCar();
                break;
            case 'Bmw':
                $car = new BmwCar();
                break;
            default:
                throw new \Exception('汽车品牌不存在');
        }
        return $car;
    }


}