<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 14:59
 */

namespace Lib\DesignPattern\AbstractFactory;

/**
 * 预先定义一个轿车的抽象类，作为一种产品线
 *
 * Class Car
 * @package Lib\DesignPattern\SimpleFactory
 */
abstract class Car
{
    /**
     * @var
     */
    private $name;


    /**
     * @return mixed
     */
    abstract public function drive();


    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }


    /**
     * @param $name
     */
    public function setName($name) {
        $this->name = $name;
    }

}