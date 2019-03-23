<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:39
 */

namespace Lib\DesignPattern\NullObject;

/**
 * 3. 创建一个控对象
 *
 * Class NullCustomer
 * @package Lib\DesignPattern\NullObject
 */
class NullCustomer extends AbstractCustomer
{

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed|string
     */
    public  function getName()
    {
        return "Not available";
    }


    /**
     * @return bool|mixed
     */
    public  function isNil()
    {
        return true;
    }

}