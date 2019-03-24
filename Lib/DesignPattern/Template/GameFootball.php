<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 15:50
 */

namespace Lib\DesignPattern\Template;

use Utils\StringFmt;

/**
 * 2. 具体的游戏类--足球游戏
 * Class GameCricket
 * @package Lib\DesignPattern\Template
 */
class GameFootball extends AbstractGameTemplate
{

    /**
     * @return mixed|void
     */
    public function init()
    {
        StringFmt::echoWithEol('Football Game Initialized!');
    }


    /**
     * @return mixed|void
     */
    public function startPlay()
    {
        StringFmt::echoWithEol('Football Game Started!');
    }


    /**
     * @return mixed|void
     */
    public function endPlay()
    {
        StringFmt::echoWithEol('Football Game Finished!');
    }

}