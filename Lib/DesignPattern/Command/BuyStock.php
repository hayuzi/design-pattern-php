<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/2
 * Time: 17:45
 */

namespace Lib\DesignPattern\Command;


class BuyStock implements OrderInterface
{

    /**
     * @var Stock
     */
    private $abcStock;


    public function __construct($abcStock)
    {
        $this->abcStock = $abcStock;
    }


    public function execute()
    {
        $this->abcStock->buy();
    }
}