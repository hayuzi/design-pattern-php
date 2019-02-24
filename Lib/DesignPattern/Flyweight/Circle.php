<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 22:21
 */

namespace Lib\DesignPattern\Facade;


use Utils\StringFmt;

class Circle implements ShapeInterface
{

    private $color  = '';
    private $radius = 0;
    private $x      = 0;
    private $y      = 0;


    public function draw()
    {
        StringFmt::echoWithEol("Circle: Draw() [Color : " . $this->color
            . ", x : " . $this->x  . ", y :" . $this->y . ", radius :" . $this->radius);
    }

}