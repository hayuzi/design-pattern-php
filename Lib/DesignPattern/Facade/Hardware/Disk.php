<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:57
 */

namespace Lib\DesignPattern\Facade\Hardware;


use Utils\StringFmt;

class Disk
{
    public function start()
    {
        StringFmt::echoWithEol("Start Disk");
    }


    public function stop()
    {
        StringFmt::echoWithEol("Stop Disk");
    }
}