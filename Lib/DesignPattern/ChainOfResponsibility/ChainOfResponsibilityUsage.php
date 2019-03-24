<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/27
 * Time: 10:46
 */

namespace Lib\DesignPattern\ChainOfResponsibility;


use Lib\UsageInterface;
use Utils\StringFmt;

class ChainOfResponsibilityUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 顾名思义，责任链模式（Chain of Responsibility Pattern）为请求创建了一个接收者对象的链。
         * 这种模式给予请求的类型，对请求的发送者和接收者进行解耦。这种类型的设计模式属于行为型模式。
         * 在这种模式中，通常每个接收者都包含对另一个接收者的引用。
         * 如果一个对象不能处理该请求，那么它会把相同的请求传给下一个接收者，依此类推。
         *
         *
         * 优点： 1、降低耦合度。它将请求的发送者和接收者解耦。
         *      2、简化了对象。使得对象不需要知道链的结构。
         *      3、增强给对象指派职责的灵活性。通过改变链内的成员或者调动它们的次序，允许动态地新增或者删除责任。
         *      4、增加新的请求处理类很方便。
         *
         * 缺点： 1、不能保证请求一定被接收。
         *      2、系统性能将受到一定影响，而且在进行代码调试时不太方便，可能会造成循环调用。
         *      3、可能不容易观察运行时的特征，有碍于除错。
         */

        // 使用
        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Chain Of Responsibility Pattern  ========');
        $loggerChain = LoggerChain::getLoggerChain();
        $loggerChain->logMessage(AbstractLogger::INFO, "This is an information.");
        $loggerChain->logMessage(AbstractLogger::DEBUG, "This is an debug level information.");
        $loggerChain->logMessage(AbstractLogger::ERROR, "This is an error information.");


    }


}