<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/21
 * Time: 16:51
 */

namespace Lib\DesignPattern\Observer;


use Utils\StringFmt;

class BinaryObserver extends AbstractObserver
{

    public function update($state)
    {
        StringFmt::echoWithEol('Binary string: ' . decbin($state));
    }


}