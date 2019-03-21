<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/21
 * Time: 16:51
 */

namespace Lib\DesignPattern\Observer;


use Utils\StringFmt;

class HexaObserver extends AbstractObserver
{

    /**
     * @param $state
     * @return mixed|void
     */
    public function update($state)
    {
        StringFmt::echoWithEol('Hexa string: ' . decoct($state));
    }


}