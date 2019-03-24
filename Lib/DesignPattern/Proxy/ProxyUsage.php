<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 21:57
 */

namespace Lib\DesignPattern\Proxy;

use Lib\UsageInterface;
use Utils\StringFmt;

/**
 * 代理模式
 *
 * Class Proxy
 * @package Lib\DesignPattern\Prototype
 */
class ProxyUsage implements UsageInterface
{

    /**
     * @throws \Exception
     */
    public static function sample()
    {

        /**
         * 在代理模式（Proxy Pattern）中，一个类代表另一个类的功能。这种类型的设计模式属于结构型模式。
         * 在代理模式中，我们创建具有现有对象的对象，以便向外界提供功能接口。
         *
         * 优点： 1、职责清晰。 2、高扩展性。 3、智能化。
         * 缺点： 1、由于在客户端和真实主题之间增加了代理对象，因此有些类型的代理模式可能会造成请求的处理速度变慢。
         *      2、实现代理模式需要额外的工作，有些代理模式的实现非常复杂。
         *
         */
        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== Proxy pattern =========");

        $image = new ProxyImage("test_10mb.jpg");
        // 图像将从磁盘加载
        $image->display();
        // 图像不需要从磁盘加载
        $image->display();


    }


}