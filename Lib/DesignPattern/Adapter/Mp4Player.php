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
 * 实现高级播放接口的 Mp4播放器类
 *
 * Class Mp4Player
 * @package Lib\DesignPattern\Adapter
 */
class Mp4Player implements AdvancedMediaPlayerInterface
{

    /**
     * @param $fileName
     * @return mixed|void
     */
    public function playVlc($fileName)
    {
        StringFmt::echoWithEol("Do nothing");
    }


    /**
     * @param $fileName
     * @return mixed|void
     */
    public function playMp4($fileName)
    {
        StringFmt::echoWithEol("Playing mp4 file. Name: " . $fileName);
    }

}