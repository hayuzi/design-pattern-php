<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 21:57
 */

namespace Lib\DesignPattern\Prototype;

use Lib\DesignPattern\UsageInterface;
use Utils\StringFmt;

/**
 *
 * Class PrototypeUsage
 * @package Lib\DesignPattern\Prototype
 */
class PrototypeUsage implements UsageInterface
{

    /**
     * @var array
     */
    private static $cache = [];


    /**
     * @param string $key
     * @return ConcretePrototype
     * @throws \Exception
     */
    public static function getConcrete($key = 'p1')
    {
        if (isset(self::$cache[$key])) {
            return self::$cache[$key];
        } else {
            throw new \Exception('Prototype key not exists');
        }

    }


    /**
     * 加载缓存的类
     */
    public static function loadCache()
    {
        $prototype = new ConcretePrototype();
        $prototype->setContent("Prototype cache p1");
        self::$cache['p1'] = $prototype;

        // 原型上克隆出第二个并缓存起来
        self::$cache['p2'] = $prototype->deepCopy()->setContent("Prototype cache p2");

        // 克隆第三个并缓存起来
        self::$cache['p3'] = $prototype->deepCopy()->setContent("Prototype cache p23");
    }


    /**
     * @throws \Exception
     */
    public static function sample()
    {

        /**
         * 这种模式是实现了一个原型接口，该接口用于创建当前对象的克隆。
         *      当直接创建对象的代价比较大时，则采用这种模式。
         *  （ PHP的类对象本来就支持克隆，其实直接克隆就可以，不过克隆的对象是浅拷贝 ）
         *
         * 原型模式中有三个登场角色：

                原型角色：定义用于复制现有实例来生成新实例的方法；
                    // 1.（抽象类或者接口）在java中的话 实现 java.lang.Cloneable 接口
                    // 2.定义复制现有实例来生成新实例的方法
                具体原型角色：实现用于复制现有实例来生成新实例的方法
                    // 2.实现复制现有实例来生成新实例的方法（也可以由超类完成）
                使用者角色：维护一个注册表，并提供一个找出正确实例原型的方法。
                    最后，提供一个获取新实例的方法，用来委托复制实例的方法生成新实例。
         *
         */

        StringFmt::echoWithEol("======== Prototype pattern =========");
        self::loadCache();
        $p1 = self::getConcrete('p1');
        $p2 = self::getConcrete('p2');
        StringFmt::echoWithEol($p1->getContent());
        StringFmt::echoWithEol($p2->getContent());

    }


}