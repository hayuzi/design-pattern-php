<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 17:21
 */

namespace Lib\DesignPattern\Singleton;

use Lib\UsageInterface;

/**
 * Class SingletonUsage
 * @package Lib\DesignPattern\Singleton
 */
class SingletonUsage implements UsageInterface
{

    /**
     *
     */
    public static function sample()
    {

        /**
         * 单例模式
         *  封装构造方法，所有的调用者只能使用同一个实例。
         *
         *
         *  但是有个多线程编程的时候，可以有多种实现方式。
         *
         *
         *  1. 懒汉式，线程不安全（ 本实例就是该方式 ）
         *  2. 懒汉式，线程安全
         *  3. 饿汉式，线程安全 ( 自生的静态属性直接就赋值为实例化好的对象 )
         *  4. 双检锁/双重校验锁（DCL，即 double-checked locking） 针对java
         *  5. 登记式/静态内部类
         *  6. 枚举               针对java
         *
         */


        $single = SingletonObject::getInstance();
        $single->otherFunctions();
    }
}