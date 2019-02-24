<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:14
 */

namespace Lib\DesignPattern\Decorator;


use Utils\StringFmt;

class RedShapeDecorator extends AbstractShapeDecorator
{

    public function draw()
    {
        $this->decoratedShape->draw();
        $this->setRedBorder();
    }


    public function setRedBorder()
    {
        StringFmt::echoWithEol("Border Color: Red");
    }

}