<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/23
 * Time: 22:33
 */

namespace Lib\DesignPattern\NullObject;

/**
 * 1. 创建一个抽象类
 *
 * Class AbstractCustomer
 * @package Lib\DesignPattern\NullObject
 */
abstract class AbstractCustomer
{

    /**
     * @var
     */
    protected $name;


    /**
     * @return mixed
     */
    public abstract function isNil();


    /**
     * @return mixed
     */
    public abstract function getName();

}