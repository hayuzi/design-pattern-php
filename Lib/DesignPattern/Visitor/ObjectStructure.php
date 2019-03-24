<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:21
 */

namespace Lib\DesignPattern\Visitor;

/**
 * 5. 结构对象 元素容器（这个角色可很少使用）
 * Class ObjectStructure
 * @package Lib\DesignPattern\Visitor
 */
class ObjectStructure
{

    /**
     * @return array
     */
    public static function getList()
    {
        $list   = [];
        $list[] = new ConcreteElement1();
        $list[] = new ConcreteElement2();
        return $list;
    }

}