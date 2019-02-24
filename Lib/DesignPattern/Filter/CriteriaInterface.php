<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 17:03
 */

namespace Lib\DesignPattern\Filter;

/**
 * Interface CriteriaInterface
 * @package Lib\DesignPattern\Filter
 */
interface CriteriaInterface
{

    /**
     * @param $persons
     * @return mixed
     */
    public function meetCriteria($persons);
}