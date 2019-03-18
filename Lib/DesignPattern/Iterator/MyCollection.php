<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/18
 * Time: 14:27
 */

namespace Lib\DesignPattern\Iterator;


class MyCollection
{

    /**
     * @var array
     */
    private $array = array();


    /**
     * 添加元素，如果存在则失败
     * @param $item
     * @return bool
     */
    public function add($item)
    {
        if (in_array($item, $this->array)) {
            return false;
        }
        $this->array[] = $item;
        return true;
    }


    /**
     * @param $item
     * @return bool
     */
    public function remove($item)
    {
        $key = array_search($item, $this->array);
        unset($this->array[$key]);
        return true;
    }


    /**
     * 获取迭代器
     * @return MyIterator
     */
    public function iterator(){
        // 此处使用的是外部定义好的迭代器类
        // 一般在java中迭代器模式 使用的是内部迭代器类
        return new MyIterator($this->array);
    }

}