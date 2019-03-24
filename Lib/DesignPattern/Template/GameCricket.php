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
 * 2. 具体的游戏类--板球游戏
 * Class GameCricket
 * @package Lib\DesignPattern\Template
 */
class GameCricket extends AbstractGameTemplate
{

    /**
     * @return mixed|void
     */
    public function init()
    {
        StringFmt::echoWithEol('Cricket Game Initialized!');
    }


    /**
     * @return mixed|void
     */
    public function startPlay()
    {
        StringFmt::echoWithEol('Cricket Game Started!');
    }


    /**
     * @return mixed|void
     */
    public function endPlay()
    {
        StringFmt::echoWithEol('Cricket Game Finished!');
    }

}