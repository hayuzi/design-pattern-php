<?php
/**
 * Created by PhpStorm.
 * User: hayuzi
 * Date: 2019/3/19
 * Time: 下午10:55
 */

namespace Lib\DesignPattern\Mediator;


class User
{

    /**
     * @var
     */
    private $name;


    public function __construct($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function sendMessage($message)
    {
        ChatRoom::showMessage($this, $message);
    }

}