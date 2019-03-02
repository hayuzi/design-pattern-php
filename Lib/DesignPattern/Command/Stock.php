<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 17:42
 */

namespace Lib\DesignPattern\Command;


use Utils\StringFmt;

/**
 * 创建一个请求类
 *
 * Class Stock
 * @package Lib\DesignPattern\Command
 */
class Stock
{

    private $name = "ABC";
    private $quantity = 10;

    public function buy(){
        StringFmt::echoWithEol("Stock [ Name: ". $this->name .",
            Quantity: " . $this->quantity . " ] bought");
    }

    public function sell(){
        StringFmt::echoWithEol("Stock [ Name: ". $this->name .",
                Quantity: " . $this->quantity . " ] sold");
       }
    }