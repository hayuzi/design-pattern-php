<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 22:40
 */

namespace Lib\DesignPattern\Prototype;

/**
 * 一个可以被克隆的抽象类原型
 *      如果在java中需要实现  Cloneable 接口
 *
 * Class AbstractPrototype
 * @package Lib\DesignPattern\Prototype
 */
abstract class AbstractPrototype
{

    /**
     * @return mixed
     */
    abstract public function shallowCopy();

    /**
     * @return mixed
     */
    abstract public function deepCopy();

}