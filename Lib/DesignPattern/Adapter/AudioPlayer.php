<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 00:00
 */

namespace Lib\DesignPattern\Adapter;
use Utils\StringFmt;


/**
 * 一个音频播放器，实现了媒体播放接口
 *
 * Class AudioPlayer
 * @package Lib\DesignPattern\Adapter
 */
class AudioPlayer implements MediaPlayerInterface
{

    /**
     * @var MediaAdapter
     */
    private $mediaAdapter;


    /**
     * @param $audioType
     * @param $fileName
     * @return mixed|void
     */
    public function play($audioType, $fileName)
    {
        $audioTypeLower = strtolower($audioType);
        switch ($audioTypeLower) {
            // 播放 mp3 音乐文件的内置支持
            case 'mp3':
                StringFmt::echoWithEol("Playing mp3 file. Name: " . $fileName);
                break;

            // mediaAdapter 提供了播放其他文件格式的支持
            case 'vlc':
            case 'mp4':
                $this->mediaAdapter = new MediaAdapter($audioType);
                $this->mediaAdapter->play($audioType, $fileName);
                break;
        }
    }


}