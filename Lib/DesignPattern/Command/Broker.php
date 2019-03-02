<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 17:49
 */

namespace Lib\DesignPattern\Command;


class Broker
{


    private $orderList = [];


    public function takeOrder(OrderInterface $order)
    {
        $this->orderList[] = $order;
    }


    public function placeOrders()
    {
        foreach ($this->orderList as $order) {
            /** @var OrderInterface $order */
            $order->execute();
        }
        $this->orderList = [];
    }

}