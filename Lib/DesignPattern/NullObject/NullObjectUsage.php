<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:28
 */

namespace Lib\DesignPattern\NullObject;


use Lib\UsageInterface;
use Utils\StringFmt;

class NullObjectUsage implements UsageInterface
{

    public static function sample()
    {
        /**
         * 在空对象模式（Null Object Pattern）中，一个空对象取代 NULL 对象实例的检查。
         * Null 对象不是检查空值，而是反应一个不做任何动作的关系。
         * 这样的 Null 对象也可以在数据不可用的时候提供默认的行为。
         *
         * 在空对象模式中，我们创建一个指定各种要执行的操作的抽象类和扩展该类的实体类，
         * 还创建一个未对该类做任何实现的空对象类，该空对象类将无缝地使用在需要检查空值的地方。
         *
         */
        StringFmt::echoWithEol();
        StringFmt::echoWithEol("======== NullObject pattern =========");

        $customer1 = CustomerFactory::getCustomer('Rob');
        $customer2 = CustomerFactory::getCustomer('Bob');
        $customer3 = CustomerFactory::getCustomer('Julie');
        $customer4 = CustomerFactory::getCustomer('Laura');

        StringFmt::echoWithEol($customer1->getName());
        StringFmt::echoWithEol($customer2->getName());
        StringFmt::echoWithEol($customer3->getName());
        StringFmt::echoWithEol($customer4->getName());
    }

}