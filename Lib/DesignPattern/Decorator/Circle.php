<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 20:45
 */

namespace Lib\DesignPattern\Decorator;


use Utils\StringFmt;

class Circle implements ShapeInterface
{

    public function draw()
    {
        StringFmt::echoWithEol('Shape: Circle');
    }

}