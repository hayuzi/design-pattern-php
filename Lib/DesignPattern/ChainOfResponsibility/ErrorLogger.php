<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 17:02
 */

namespace Lib\DesignPattern\ChainOfResponsibility;

use Utils\StringFmt;

class ErrorLogger extends AbstractLogger
{

    /**
     * ErrorLogger constructor.
     * @param $level
     */
    public function __construct($level)
    {
        $this->level = $level;
    }


    /**
     * @param $message
     */
    protected function write($message)
    {
        StringFmt::echoWithEol('Error Console::Logger:' . $message);
    }


}