<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 10:58
 */

namespace Lib\DesignPattern\AbstractFactory;


/**
 * 抽象工厂模式使用示例
 *
 * Class FactoryMethodUsage
 * @package Lib\DesignPattern\AbstractFactory
 */
class AbstractFactoryUsage
{

    /**
     *  调用示例
     *
     * @throws \Exception
     */
    public static function sample()
    {
        /**
         *
         *
         *  抽象工厂模式适合与用在每个产品都有多个系列的时候（也可以称为产品族），
         *  即在工厂方法模式基础上，产品衍生出了下一个层级，
         *  但是当前产品的每一个下级产品都复合某个系列的共性。
         *
         *  这样的话，我们在工厂方法模式上，将原来的产品设置为抽象的产品基础类，更具体的下级系列产品继承这个上层的产品基类
         *  与此同时，产品工厂则也发生一系列变化，原先的产品工厂是生产一个产品，现在则生产一个产品系列。
         *
         *  抽象工厂模式的缺点：如果需要增加新的产品树，那么就要新增三个产品类，
         *      比如VolvoCar，VolvoSportCar,VolvoSportCar，并且要修改三个工厂类。
         *      这样大批量的改动是很丑陋的做法。
         *      在此基础上，我们可以使用简单工厂配合改进抽象工厂 （ 如下调用 ）
         *
         *
         *  所以 使用抽象工厂模式还要满足一下条件：
         *   1.系统中有多个产品族，而系统一次只可能消费其中一族产品
         *   2.同属于同一个产品族的产品以其使用。
         */

        // 示例中：BenzSportCar和BenzBusinessCar属于产品树；
        // 同理BmwSportCar和BmwBusinessCar。
        // 而BenzSportCar和BmwSportCar和AudiSportCar属于产品族。


        // 如果我想使用某个运动系汽车, 则使用如下方式调用
        $driver  = new SportCarFactory();
        $benzCar = $driver->createBenzCar();
        $bmwCar  = $driver->createBmwCar();
        $benzCar->drive();
        $bmwCar->drive();


        // 调用简单工厂加基础抽象工厂混合的方式
        $driver2 = new SimpleAndAbstractCarFactory();
        $benzSportCar = $driver2->createBenzCar(BenzSportCar::class);
        $benzSportCar->drive();

    }

}