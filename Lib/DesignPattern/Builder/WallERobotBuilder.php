<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 20:43
 */

namespace Lib\DesignPattern\Builder;


/**
 * 建造瓦利机器人
 *      具体的建造者角色
 *
 * Class BuildWallERobot
 * @package Lib\DesignPattern\Builder
 */
class WallERobotBuilder implements RobotBuilderInterface
{

    /**
     * @var Robot
     */
    private $wallE;


    public function __construct()
    {
        $this->wallE = new Robot();
    }


    public function buildHead()
    {
        $this->wallE->setHead("WallE Head");
    }


    public function buildHand()
    {
        $this->wallE->setHand("WallE Hand");
    }


    public function buildBody()
    {
        $this->wallE->setBody("WallE Body");
    }


    public function buildFoot()
    {
        $this->wallE->setFoot("WallE Foot");
    }


    /**
     * @return Robot
     */
    public function createRobot()
    {
        return $this->wallE;
    }
}