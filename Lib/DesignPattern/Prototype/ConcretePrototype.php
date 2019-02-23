<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 22:56
 */

namespace Lib\DesignPattern\Prototype;


/**
 * 具体的原型类
 *
 * Class ConcretePrototype
 * @package Lib\DesignPattern\Prototype
 */
class ConcretePrototype
{

    /**
     * @var string
     */
    private $content = '';


    /**
     * @return string
     */
    public function getContent() {
        return $this->content;
    }


    /**
     * 设置内容
     *
     * @param $content
     * @return $this   返回自己 便于链式调用
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }


    /**
     * 浅拷贝,  这里返回的引用是同一个
     *      （原型克隆的方法，也可以交给父类来完成）
     *
     * @return ConcretePrototype
     */
    public function shallowCopy() {
        return clone $this;
    }


    /**
     * 深拷贝（原型克隆的方法，也可以交给父类来完成）
     *
     * @return ConcretePrototype
     */
    public function deepCopy()
    {
        $serializeObj = serialize($this);
        return unserialize($serializeObj);
    }

}