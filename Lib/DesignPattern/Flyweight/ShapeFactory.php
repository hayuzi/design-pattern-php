<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 22:19
 */

namespace Lib\DesignPattern\Flyweight;

/**
 * Class ShapeFactory
 * @package Lib\DesignPattern\Flyweight
 */
class ShapeFactory
{

    /**
     * @var array
     */
    private $shapeList = [];


    /**
     * @param $color
     * @return mixed
     */
    public function getCircle($color)
    {
        if (!isset($this->shapeList[$color])) {
            $this->shapeList[$color] = new Circle($color);
        }
        return $this->shapeList[$color];
    }


}