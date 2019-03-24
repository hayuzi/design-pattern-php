<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:03
 */

namespace Lib\DesignPattern\Visitor;

use Utils\StringFmt;

/**
 * 2. 具体的元素类 1
 *
 * Class ConcreteElement1
 * @package Lib\DesignPattern\Visitor
 */
class ConcreteElement1 extends AbstractElement
{

    /**
     * @param VisitorInterface $visitor
     * @return mixed|void
     */
    public function accept(VisitorInterface $visitor)
    {
        $visitor->visit($this);
    }


    /**
     * @return mixed|void
     */
    public function doSomething()
    {
        StringFmt::echoWithEol('This is element 1');
    }

}