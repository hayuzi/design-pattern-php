<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 23:35
 */

namespace Lib\DesignPattern\Adapter;

/**
 * 一个高级媒体播放器接口
 *
 * Interface MediaPlayerInterface
 * @package Lib\DesignPattern\Adapter
 */
interface AdvancedMediaPlayerInterface
{
    /**
     * @param $fileName
     * @return mixed
     */
    public function playVlc($fileName);

    /**
     * @param $fileName
     * @return mixed
     */
    public function playMp4($fileName);

}