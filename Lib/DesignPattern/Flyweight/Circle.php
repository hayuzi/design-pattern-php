<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 22:21
 */

namespace Lib\DesignPattern\Flyweight;


use Utils\StringFmt;

/**
 * Class Circle
 * @package Lib\DesignPattern\Flyweight
 */
class Circle implements ShapeInterface
{

    private $color  = '';
    private $radius = 0;
    private $x      = 0;
    private $y      = 0;


    /**
     * Circle constructor.
     * @param $color
     */
    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }


    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }


    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }


    /**
     * @param int $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }


    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }


    /**
     * @param int $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }


    /**
     *
     */
    public function draw()
    {
        StringFmt::echoWithEol("Circle: Draw() [Color : " . $this->color
            . ", x : " . $this->x  . ", y :" . $this->y . ", radius :" . $this->radius);
    }

}