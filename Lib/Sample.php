<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/21
 * Time: 11:04
 */

namespace Lib;


use Lib\DesignPattern\SimpleFactory\SimpleFactorySample;

class Sample
{
    /**
     * 脚本执行
     */
    public static function run()
    {
        try {

            // 1. 简单工厂
            SimpleFactorySample::sample();

        } catch (\Exception $e) {
            echo $e->getMessage();
            echo "\n";
        }
    }

}