<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 21:57
 */

namespace Lib\DesignPattern\Adapter;

use Lib\UsageInterface;
use Utils\StringFmt;

/**
 *
 * Class AdapterUsage
 * @package Lib\DesignPattern\Prototype
 */
class AdapterUsage implements UsageInterface
{

    /**
     * @throws \Exception
     */
    public static function sample()
    {

        /**
         * 适配器模式（Adapter Pattern）是作为两个不兼容的接口之间的桥梁。
         * 这种类型的设计模式属于结构型模式，它结合了两个独立接口的功能。
         * 这种模式涉及到一个单一的类，该类负责加入独立的或不兼容的接口功能。
         * 举个真实的例子，读卡器是作为内存卡和笔记本之间的适配器。
         * 您将内存卡插入读卡器，再将读卡器插入笔记本，这样就可以通过笔记本来读取内存卡。
         *
         *
         * 优点：1、可以让任何两个没有关联的类一起运行。
         *      2、提高了类的复用。
         *      3、增加了类的透明度。
         *      4、灵活性好。
         *
         * 缺点：1、过多地使用适配器，会让系统非常零乱，不易整体进行把握。
         *          比如，明明看到调用的是 A 接口，其实内部被适配成了 B 接口的实现，
         *          一个系统如果太多出现这种情况，无异于一场灾难。因此如果不是很有必要，
         *          可以不使用适配器，而是直接对系统进行重构。
         *      2.由于 JAVA 至多继承一个类，所以至多只能适配一个适配者类，而且目标类必须是抽象类。
         *
         *
         *
         * 媒体播放器适配器示例步骤：
         *  1. 为媒体播放器和更高级的媒体播放器创建接口.            MediaPlayerInterface  AdvancedMediaPlayerInterface
         *  2. 创建实现了 AdvancedMediaPlayer 接口的实体类.    VlcPlayer Mp4Player
         *  3. 创建实现了 MediaPlayer 接口的适配器类.           MediaAdapter
         *  4. 创建实现了 MediaPlayer 接口的实体类.            AudioPlayer
         *  5. 使用 AudioPlayer 来播放不同类型的音频格式: 当前方法
         */

        StringFmt::echoWithEol("");
        StringFmt::echoWithEol("======== Adapter pattern =======");
        $audioPlayer = new AudioPlayer();
        $audioPlayer->play("mp3", "beyond the horizon.mp3");
        $audioPlayer->play("mp4", "alone.mp4");
        $audioPlayer->play("vlc", "far far away.vlc");
        $audioPlayer->play("avi", "mind me.avi");

    }


}