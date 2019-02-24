<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:57
 */

namespace Lib\DesignPattern\Facade\Hardware;


use Utils\StringFmt;

class Memory
{

    public function start()
    {
        StringFmt::echoWithEol("Start Memory");
    }


    public function stop()
    {
        StringFmt::echoWithEol("Stop Memory");
    }

}