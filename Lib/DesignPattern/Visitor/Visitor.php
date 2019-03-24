<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:09
 */

namespace Lib\DesignPattern\Visitor;

/**
 * 4. 具体的实际访问者
 *
 * Class Visitor
 * @package Lib\DesignPattern\Visitor
 */
class Visitor implements VisitorInterface
{

    /**
     * 访问者事务处理
     *
     * @param AbstractElement $element
     * @return mixed|void
     */
    public function visit(AbstractElement $element)
    {
        /** 此处由于不能定义多个visit方法来处理不同的元素类逻辑， 只能通过变通在此方法中做隔离  */
        if ($element instanceof ConcreteElement1) {
            $element->doSomething();
        } elseif ($element instanceof ConcreteElement2) {
            $element->doSomething();
        }
    }

}