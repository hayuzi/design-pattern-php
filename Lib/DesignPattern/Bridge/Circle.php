<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 15:51
 */

namespace Lib\DesignPattern\Bridge;


class Circle extends AbstractShape
{

    private $x;

    private $y;

    private $radius;


    public function __construct($radius, $x, $y, DrawInterface $draw)
    {
        parent::__construct($draw);
        $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
    }


    public function draw()
    {
        $this->draw->drawCircle($this->radius, $this->x, $this->y);
    }


}