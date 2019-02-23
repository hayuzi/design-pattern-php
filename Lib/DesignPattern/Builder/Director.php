<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/23
 * Time: 20:52
 */

namespace Lib\DesignPattern\Builder;


/**
 * 监工角色
 *
 *      这个director类呢，重点在于 CreateRobotByDirector 的参数是我们的造机器人标准的接口。
 *      这样一来，只要是实现了我们的这个接口的类，就都可以作为参数
 *
 * Class Director
 * @package Lib\DesignPattern\Builder
 */
class Director
{

    /**
     * 建造机器人的方法
     *
     *  这里面一些列复杂的建造过程.
     *
     * @param RobotBuilderInterface $buildWallERobot
     * @return Robot
     */
    public function createRobotByDirector(RobotBuilderInterface $buildWallERobot)
    {
        $buildWallERobot->buildHead();
        $buildWallERobot->buildHand();
        $buildWallERobot->buildBody();
        $buildWallERobot->buildFoot();
        $wallERobot = $buildWallERobot->createRobot();
        return $wallERobot;
    }


}