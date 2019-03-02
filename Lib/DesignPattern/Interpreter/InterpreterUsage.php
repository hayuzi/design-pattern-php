<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 18:00
 */

namespace Lib\DesignPattern\Interpreter;

use Lib\DesignPattern\UsageInterface;
use Utils\StringFmt;

class InterpreterUsage implements UsageInterface
{


    public static function sample()
    {
        /**
         * 解释器模式（Interpreter Pattern）提供了评估语言的语法或表达式的方式，它属于行为型模式。
         * 这种模式实现了一个表达式接口，该接口解释一个特定的上下文。这种模式被用在 SQL 解析、符号处理引擎等。
         *
         * 优点： 1、可扩展性比较好，灵活。
         *      2、增加了新的解释表达式的方式。
         *      3、易于实现简单文法。
         * 缺点： 1、可利用场景比较少。
         *      2、对于复杂的文法比较难维护。
         *      3、解释器模式会引起类膨胀。
         *      4、解释器模式采用递归调用方法。
         *
         */

        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Interpreter Pattern  ========');
        $isMale         = self::getMaleExpression();
        $isMarriedWoman = self::getMarriedWomanExpression();
        StringFmt::echoWithEol("John is male? " . $isMale->interpret("John"));
        StringFmt::echoWithEol("Julie is a married women? " . $isMarriedWoman->interpret("Married Julie"));

    }


    //规则：Robert 和 John 是男性
    public static function getMaleExpression()
    {
        $robert = new TerminalExpression("Robert");
        $john   = new TerminalExpression("John");
        return new OrExpression($robert, $john);
    }

    //规则：Julie 是一个已婚的女性
    public static function getMarriedWomanExpression()
    {
        $julie   = new TerminalExpression("Julie");
        $married = new TerminalExpression("Married");
        return new AndExpression($julie, $married);
    }


}