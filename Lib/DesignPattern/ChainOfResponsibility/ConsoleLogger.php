<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 16:47
 */

namespace Lib\DesignPattern\ChainOfResponsibility;

use Utils\StringFmt;

/**
 *
 *
 * Class ConsoleLogger
 * @package Lib\DesignPattern\ChainOfResponsibility
 */
class ConsoleLogger extends AbstractLogger
{

    /**
     * ConsoleLogger constructor.
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
        StringFmt::echoWithEol('Standard Console::Logger:' . $message);
    }

}