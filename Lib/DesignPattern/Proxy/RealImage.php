<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 22:56
 */

namespace Lib\DesignPattern\Proxy;


use Utils\StringFmt;

class RealImage implements ImageInterface
{

    /**
     * @var
     */
    private $fileName;


    /**
     * RealImage constructor.
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk();
    }


    /**
     *
     */
    public function display()
    {
        StringFmt::echoWithEol('Displaying ' . $this->fileName);
    }


    /**
     *
     */
    public function loadFromDisk()
    {
        StringFmt::echoWithEol('Loading ' . $this->fileName);
    }

}