<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 17:41
 */

namespace Lib\DesignPattern\Command;


/**
 * Interface OrderInterface
 * @package Lib\DesignPattern\Command
 */
interface OrderInterface
{

    /**
     * @return mixed
     */
    public function execute();

}