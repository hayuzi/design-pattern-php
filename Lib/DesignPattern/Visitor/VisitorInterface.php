<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:02
 */

namespace Lib\DesignPattern\Visitor;

/**
 * 3. 抽象的访问者接口
 * Interface VisitorInterface
 * @package Lib\DesignPattern\Visitor
 */
interface VisitorInterface
{

    /**
     * 访问者的访问方法.
     * 这个方法在java中可以定义不同参数的同名方法, 一般java中会定义多个visit方法，接受不同的元素类对象
     * 但是在PHP中方法不能重复定义，所以这个地方暂时抽象成为一个方法
     * 这样有一个问题是, 在这个方法里面，如果要处理不同的访问逻辑只能通过判断参数继承的具体的元素类来解决
     *
     * @param AbstractElement $element
     * @return mixed
     */
    public function visit(AbstractElement $element);


}