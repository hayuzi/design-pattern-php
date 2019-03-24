<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 15:46
 */

namespace Lib\DesignPattern\Template;

/**
 * 1. 抽象的游戏模版类
 *
 * Class AbstractGameTemplate
 * @package Lib\DesignPattern\Template
 */
abstract class AbstractGameTemplate
{

    /**
     * 初始化 （抽象的模板方法）
     * @return mixed
     */
    abstract public function init();


    /**
     * 启动游戏 （抽象的模板方法）
     * @return mixed
     */
    abstract public function startPlay();


    /**
     * 结束游戏 （抽象的模板方法）
     * @return mixed
     */
    abstract public function endPlay();

}