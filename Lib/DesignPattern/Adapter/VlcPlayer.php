<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 23:39
 */

namespace Lib\DesignPattern\Adapter;


use Utils\StringFmt;

/**
 *  实现高级播放接口的 Vlc 播放器类
 *
 * Class VlcPlayer
 * @package Lib\DesignPattern\Adapter
 */
class VlcPlayer implements AdvancedMediaPlayerInterface
{

    /**
     * @param $fileName
     * @return mixed|void
     */
    public function playVlc($fileName)
    {
        StringFmt::echoWithEol("Playing vlc file. Name: " . $fileName);
    }


    /**
     * @param $fileName
     * @return mixed|void
     */
    public function playMp4($fileName)
    {
        StringFmt::echoWithEol("Do nothing");
    }

}