<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 16:56
 */

namespace Lib\DesignPattern\Filter;

/**
 * 一个被过滤的对象
 *
 * Class Person
 * @package Lib\DesignPattern\Filter
 */
class Person
{

    const GENDER_MALE   = "MALE";
    const GENDER_FEMALE = "FEMALE";


    private $age    = 1;
    private $name   = '';
    private $gender = self::GENDER_MALE;


    /**
     * Person constructor.
     * @param $age
     * @param $name
     * @param $gender
     */
    public function __construct($age, $name, $gender)
    {
        $this->age    = $age;
        $this->name   = $name;
        $this->gender = $gender;

    }


    /**
     * @return string
     */
    public function toString()
    {
        $person = [
            'age'    => $this->age,
            'name'   => $this->name,
            'gender' => $this->gender,
        ];
        return json_encode($person, JSON_UNESCAPED_UNICODE);
    }


    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * @param int $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }


}