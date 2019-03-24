<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 10:09
 */

namespace Lib\DesignPattern\Template;


use Lib\UsageInterface;
use Utils\StringFmt;

/**
 *
 * Class TemplateUsage
 * @package Lib\DesignPattern\Template
 */
class TemplateUsage implements UsageInterface
{


    public static function sample()
    {
        /**
         * 在模板模式（Template Pattern）中，一个抽象类公开定义了执行它的方法的方式/模板。
         * 它的子类可以按需要重写方法实现，但调用将以抽象类中定义的方式进行。
         * 这种类型的设计模式属于行为型模式。
         *
         * 优点： 1、封装不变部分，扩展可变部分。
         *      2、提取公共代码，便于维护。
         *      3、行为由父类控制，子类实现。
         * 缺点：每一个不同的实现都需要一个子类来实现，导致类的个数增加，使得系统更加庞大。
         */


        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== Template pattern =========");

        $game = new GameCricket();
        $game->init();

        $game = new GameFootball();
        $game->startPlay();
        $game->endPlay();

    }

}