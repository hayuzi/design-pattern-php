<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/22
 * Time: 10:34
 */

namespace Lib\DesignPattern\Builder;


use Lib\DesignPattern\UsageInterface;

class BuilderUsage implements UsageInterface
{

    public static function sample()
    {
        // TODO: Implement sample() method.

        /**
         * 建造者模式，又称生成器模式：将一个复杂的构建与其表示相分离，使得同样的构建过程可以创建不同的表示。
            三个角色：建造者、具体的建造者、监工、使用者（严格来说不算）
            建造者角色：定义生成实例所需要的所有方法；
            具体的建造者角色：实现生成实例所需要的所有方法，并且定义获取最终生成实例的方法；
            监工角色：定义使用建造者角色中的方法来生成实例的方法；
            使用者：使用建造者模式。
         */

        // 使用者
        $director = new Director();//监工
        $robot = $director->createRobotByDirector(new WallERobotBuilder());

        echo "==========\n";
        echo $robot->getHead() . "\n";

        echo "==========\n";

    }

}