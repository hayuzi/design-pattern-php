<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 16:22
 */

namespace Lib\DesignPattern\Filter;


use Lib\UsageInterface;
use Utils\StringFmt;

class FilterUsage implements UsageInterface
{

    public static function sample()
    {

        /**
         * 过滤器模式（Filter Pattern）或标准模式（Criteria Pattern）是一种设计模式，
         * 这种模式允许开发人员使用不同的标准来过滤一组对象，通过逻辑运算以解耦的方式把它们连接起来。
         * 这种类型的设计模式属于结构型模式，它结合多个标准来获得单一标准。
         *
         *  如果使用过Java 8的话会发现lambda表达式和流类库会帮我们非常方便的实现过滤器模式的功能。
         *
         */

        // 1. 创建一个类 Person，在该类上应用标准
        // 2. 为标准（Criteria）创建一个接口
        // 3. 创建实现了 Criteria 接口的实体类。CriteriaMale CriteriaFemale
        // 4. 使用不同的标准（Criteria）和它们的结合来过滤 Person 对象的列表。

        StringFmt::echoWithEol();
        StringFmt::echoWithEol('========  Filter Pattern  ========');

        $persons = [];
        array_push($persons, new Person(18, "Jack", Person::GENDER_MALE));
        array_push($persons, new Person(22, "April", Person::GENDER_FEMALE));
        array_push($persons, new Person(30, "Tom", Person::GENDER_MALE));
        array_push($persons, new Person(52, "Joy", Person::GENDER_MALE));

        $male = new CriteriaMale();
        $female = new CriteriaFemale();
        $malePersons = $male->meetCriteria($persons);
        $femalePersons = $female->meetCriteria($persons);

        foreach ($malePersons as $v) {
            /** @var $v Person */
            StringFmt::echoWithEol($v->toString());
        }

        foreach ($femalePersons as $v) {
            /** @var $v Person */
            StringFmt::echoWithEol($v->toString());
        }

    }

}