<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:57
 */

namespace Lib\DesignPattern\NullObject;


/**
 * Class CustomerFactory
 * @package Lib\DesignPattern\NullObject
 */
class CustomerFactory
{

    /**
     *
     */
    const NAMES_ARRAY = [
        'Rob',
        'Joe',
        'Julie'
    ];


    public static function getCustomer($name)
    {
        if (in_array($name, self::NAMES_ARRAY)) {
            return new RealCustomer($name);
        }
        return new NullCustomer();

    }

}