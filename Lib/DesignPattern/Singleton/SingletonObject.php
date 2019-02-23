<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 17:35
 */

namespace Lib\DesignPattern\Singleton;


use Utils\StringFmt;

class SingletonObject
{

    /**
     * @var null 自身静态属性，持有自己的实例
     */
    private static $instance = null;

    /**
     * 私有化构造函数，不能在外部直接实例化
     *
     * SingletonObject constructor.
     */
    private function __construct()
    {

    }

    /**
     * 提供一个
     *
     * @return SingletonObject|null
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }


    /**
     * 其他的方法处理
     */
    public function otherFunctions()
    {
        StringFmt::echoWithEol('Singleton otherFunctions usage');
    }


}