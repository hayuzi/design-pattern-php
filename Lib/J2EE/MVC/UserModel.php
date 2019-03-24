<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:42
 */

namespace Lib\J2EE\MVC;


class UserModel
{

    /**
     * @var int
     */
    private $id = 0;

    /**
     * @var string
     */
    private $name = '';


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return array
     */
    public function getUserFromDb()
    {
        $user = [
            'id'   => 1,
            'name' => 'Robot',
        ];
        $this->setId($user['id']);
        $this->setName($user['name']);
        return $user;
    }


}