<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 15:46
 */

namespace Lib\DesignPattern\Bridge;


abstract class AbstractShape
{
    /**
     * @var DrawInterface
     */
    protected $draw;


    /**
     * AbstractShape constructor.
     * @param DrawInterface $draw
     */
    protected function __construct(DrawInterface $draw)
    {
        $this->draw = $draw;
    }


    /**
     * @return mixed
     */
    abstract public function draw();


}