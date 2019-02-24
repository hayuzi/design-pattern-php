<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:53
 */

namespace Lib\DesignPattern\Facade\Hardware;

use Utils\StringFmt;

class CPU
{

    public function start()
    {
        StringFmt::echoWithEol("Start CPU");
    }


    public function stop()
    {
        StringFmt::echoWithEol("Stop CPU");
    }

}