<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 23:35
 */

namespace Lib\DesignPattern\Adapter;

/**
 * 一个普通媒体播放器接口
 *
 * Interface MediaPlayerInterface
 * @package Lib\DesignPattern\Adapter
 */
interface MediaPlayerInterface
{
    /**
     * @param $audioType
     * @param $fileName
     * @return mixed
     */
    public function play($audioType, $fileName);

}