<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 16:04
 */

namespace Lib\DesignPattern\ChainOfResponsibility;

/**
 * 以记录不同等级日志为例，定义一个日志抽象类
 *
 * Class AbstractLogger
 * @package Lib\DesignPattern\ChainOfResponsibility
 */
abstract class AbstractLogger
{

    const INFO  = 1;
    const DEBUG = 2;
    const ERROR = 3;

    /**
     * @var integer 等级
     */
    protected $level;

    /**
     * @var AbstractLogger 责任链中的下一个元素
     */
    protected $nextLogger;

    /**
     * @param AbstractLogger $nextLogger
     */
    public function setNextLogger(AbstractLogger $nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    /**
     * @param int $level
     * @param string $message
     */
    public function logMessage($level, $message)
    {
        if ($this->level <= $level) {
            $this->write($message);
        }
        if ($this->nextLogger !== null) {
            $this->nextLogger->logMessage($level, $message);
        }
    }


    abstract protected function write($message);


}