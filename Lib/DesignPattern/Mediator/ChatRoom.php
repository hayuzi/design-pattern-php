<?php
/**
 * Created by PhpStorm.
 * User: hayuzi
 * Date: 2019/3/19
 * Time: 下午10:52
 */

namespace Lib\DesignPattern\Mediator;


use Utils\StringFmt;

/**
 * 聊天室 相当于一个中介者
 *
 * Class ChatRoom
 * @package Lib\DesignPattern\Mediator
 */
class ChatRoom
{
    /**
     * @param $user
     * @param $message
     */
    public static function showMessage(User $user, $message){
        $show = date('y-m-d H:i:s') . ' [' . $user->getName() . '] : ' . $message;
        StringFmt::echoWithEol($show);
    }
}