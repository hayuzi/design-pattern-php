<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:01
 */

namespace Lib\DesignPattern\Visitor;

/**
 * 1. 抽象元素类
 * Class AbstractElement
 * @package Lib\DesignPattern\Visitor
 */
abstract class AbstractElement
{

    /**
     * 允许访问者访问的方法
     * @param VisitorInterface $visitor
     * @return mixed
     */
    abstract public function accept(VisitorInterface $visitor);

    /**
     * 具体的内部逻辑方法
     * @return mixed
     */
    abstract public function doSomething();


}