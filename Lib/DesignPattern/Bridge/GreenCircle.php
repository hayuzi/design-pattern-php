<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 15:38
 */

namespace Lib\DesignPattern\Bridge;


use Utils\StringFmt;

class GreenCircle implements DrawInterface
{

    /**
     * @param $radius
     * @param $x
     * @param $y
     * @return mixed|void
     */
    public function drawCircle($radius, $x, $y)
    {
        StringFmt::echoWithEol("Drawing Circle[ color: green, radius: "
            . $radius . ", x: " . $x . ", " . $y . "]");
    }

}