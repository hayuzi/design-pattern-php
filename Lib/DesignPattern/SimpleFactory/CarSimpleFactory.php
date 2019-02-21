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