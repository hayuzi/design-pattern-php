<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 20:38
 */

namespace Lib\DesignPattern\Builder;

/**
 * 机器人的建造者接口
 *  建造者角色接口
 *
 *
 * Interface BuildRobotInterface
 * @package Lib\DesignPattern\Builder
 */
interface RobotBuilderInterface
{
    /**
     * @return mixed
     */
    public function buildHead();


    /**
     * @return mixed
     */
    public function buildBody();


    /**
     * @return mixed
     */
    public function buildHand();


    /**
     * @return mixed
     */
    public function buildFoot();


    /**
     * @return Robot
     */
    public function createRobot();
}