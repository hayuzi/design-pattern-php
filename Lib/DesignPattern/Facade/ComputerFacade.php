<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 21:58
 */

namespace Lib\DesignPattern\Facade;

use Lib\DesignPattern\Facade\Hardware\CPU;
use Lib\DesignPattern\Facade\Hardware\Disk;
use Lib\DesignPattern\Facade\Hardware\Memory;


/**
 * 提供一个计算机的门面，统一开启和关闭各个硬件
 *
 * Class ComputerFacade
 * @package Lib\DesignPattern\Facade
 */
class ComputerFacade
{

    /**
     * @var CPU
     */
    private $cpu;

    /**
     * @var Memory
     */
    private $memory;

    /**
     * @var Disk
     */
    private $disk;


    /**
     * ComputerFacade constructor.
     */
    public function __construct()
    {
        $this->cpu    = new CPU();
        $this->memory = new Memory();
        $this->disk   = new Disk();
    }


    public function start()
    {
        $this->cpu->start();
        $this->memory->start();
        $this->disk->start();
    }


    public function stop()
    {
        $this->disk->stop();
        $this->memory->stop();
        $this->cpu->stop();
    }

}