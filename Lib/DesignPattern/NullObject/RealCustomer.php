<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:35
 */

namespace Lib\DesignPattern\NullObject;


/**
 * 2. 创建继承了抽象类的实体类
 * Class RealCustomer
 * @package Lib\DesignPattern\NullObject
 */
class RealCustomer extends AbstractCustomer
{

    /**
     * RealCustomer constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return bool|mixed
     */
    public function isNil()
    {
        return false;
    }


}