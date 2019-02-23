<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 23:49
 */

namespace Lib\DesignPattern\Adapter;

/**
 * 一个实现了普通媒体播放器接口的适配器类
 *
 * Class MediaAdapter
 * @package Lib\DesignPattern\Adapter
 */
class MediaAdapter implements MediaPlayerInterface
{

    /**
     * @var AdvancedMediaPlayerInterface
     */
    private $advancedMediaPlayer;


    /**
     * 构造方法
     * 普通播放接口兼容高级播放接口
     *
     * MediaAdapter constructor.
     * @param $audioType
     */
    public function __construct($audioType){
        if(strtolower($audioType) === "vlc"){
            $this->advancedMediaPlayer = new VlcPlayer();
        } else if (strtolower($audioType) === "mp4"){
            $this->advancedMediaPlayer = new Mp4Player();
        }
    }


    /**
     * 实现的播放方法
     *
     * @param $audioType
     * @param $fileName
     * @return mixed|void
     */
    public function play($audioType, $fileName)
    {
        if(strtolower($audioType) === "vlc"){
            $this->advancedMediaPlayer->playVlc($fileName);
        } else if (strtolower($audioType) === "mp4"){
            $this->advancedMediaPlayer->playMp4($fileName);
        }
    }

}