<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 20:51
 */

namespace Lib\DesignPattern\Decorator;


class AbstractShapeDecorator implements ShapeInterface
{

    /**
     * @var ShapeInterface
     */
    protected $decoratedShape;


    public function __construct(ShapeInterface $decoratedShape)
    {
        $this->decoratedShape = $decoratedShape;
    }


    public function draw()
    {
        $this->decoratedShape->draw();
    }


}