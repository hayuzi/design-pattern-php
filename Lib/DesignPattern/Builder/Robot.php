<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/22
 * Time: 10:41
 */

namespace Lib\DesignPattern\Builder;

/**
 * 机器人类
 *
 * Class Robot
 * @package Lib\DesignPattern\Builder
 */
class Robot
{
    /**
     * @var
     */
    private $head;

    /**
     * @var
     */
    private $hand;

    /**
     * @var
     */
    private $body;

    /**
     * @var
     */
    private $foot;


    /**
     * @param $head
     */
    public function setHead($head)
    {
        $this->head = $head;
    }


    /**
     * @return mixed
     */
    public function getHead()
    {
        return $this->head;
    }


    /**
     * @param $hand
     */
    public function setHand($hand)
    {
        $this->hand = $hand;
    }


    /**
     * @return mixed
     */
    public function getHand()
    {
        return $this->hand;
    }



    /**
     * @param $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }


    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }



    /**
     * @param $foot
     */
    public function setFoot($foot)
    {
        $this->foot = $foot;
    }


    /**
     * @return mixed
     */
    public function getFoot()
    {
        return $this->foot;
    }


}