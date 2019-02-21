<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 16:24
 */

namespace Lib\DesignPattern\AbstractFactory;


class BmwBusinessCar extends BmwCar
{

    public function drive()
    {
        // TODO: Implement drive() method.
        echo "AbstractFactory BmwBusinessCar drive \n";
    }
}