<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 15:32
 */

namespace Lib\DesignPattern\Bridge;


interface DrawInterface
{

    /**
     * @param $radius
     * @param $x
     * @param $y
     * @return mixed
     */
    public function drawCircle($radius, $x, $y);



}