<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/18
 * Time: 14:16
 */

namespace Lib\DesignPattern\Iterator;


use Utils\StringFmt;

class MyIterator implements \Iterator
{

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var array
     */
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    /**
     * MyIterator constructor.
     */
    public function __construct() {
        $this->position = 0;
    }

    /**
     *
     */
    public function rewind() {
        StringFmt::echoWithEol(__METHOD__);
        $this->position = 0;
    }

    public function current() {
        StringFmt::echoWithEol(__METHOD__);
        return $this->array[$this->position];
    }

    public function key() {
        StringFmt::echoWithEol(__METHOD__);
        return $this->position;
    }

    public function next() {
        StringFmt::echoWithEol(__METHOD__);
        ++$this->position;
    }

    public function valid() {
        StringFmt::echoWithEol(__METHOD__);
        return isset($this->array[$this->position]);
    }

}



