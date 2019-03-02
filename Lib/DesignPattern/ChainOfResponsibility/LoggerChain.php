<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 17:17
 */

namespace Lib\DesignPattern\ChainOfResponsibility;


class LoggerChain
{

    /**
     * @return ErrorLogger
     */
    public static function getLoggerChain()
    {
        $errorLogger   = new ErrorLogger(AbstractLogger::ERROR);
        $fileLogger    = new FileLogger(AbstractLogger::DEBUG);
        $consoleLogger = new ConsoleLogger(AbstractLogger::INFO);
        $errorLogger->setNextLogger($fileLogger);
        $fileLogger->setNextLogger($consoleLogger);
        return $errorLogger;
    }

}