<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 23:00
 */

namespace Lib\DesignPattern\Proxy;

/**
 *
 *
 * Class ProxyImage
 * @package Lib\DesignPattern\Proxy
 */
class ProxyImage implements ImageInterface
{

    /**
     * @var RealImage
     */
    private $realImage;


    /**
     * @var
     */
    private $fileName;


    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }


    /**
     *
     */
    public function display()
    {
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }

}