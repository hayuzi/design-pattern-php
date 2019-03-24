<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:44
 */

namespace Lib\J2EE\MVC;


use Utils\StringFmt;

class UserView
{

    public function showInfo($id, $name)
    {
        StringFmt::echoWithEol('User:');
        StringFmt::echoWithEol("\tId:   " . $id);
        StringFmt::echoWithEol("\tName: " . $name);
    }

}