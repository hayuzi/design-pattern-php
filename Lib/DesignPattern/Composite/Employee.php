<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 17:39
 */

namespace Lib\DesignPattern\Composite;

/**
 * 一个
 *
 *
 * Class Employee
 * @package Lib\DesignPattern\Composite
 */
class Employee
{

    private $name   = '';
    private $dept   = '';
    private $salary = 0;


    private $subordinates = [];


    /**
     * Employee constructor.
     * @param $name
     * @param $dept
     * @param $sal
     */
    public function __construct($name, $dept, $sal)
    {
        $this->name   = $name;
        $this->dept   = $dept;
        $this->salary = $sal;
    }

    /**
     * @param Employee $e
     */
    public function add(Employee $e)
    {
        $this->subordinates[] = $e;
    }


    /**
     * @param Employee $e
     * @return bool
     */
    public function remove(Employee $e)
    {
        $key = array_search($e, $this->subordinates);
        if ($key !== false) {
            unset($this->subordinates[$key]);
        }
        return true;
    }


    /**
     * @return array
     */
    public function getSubordinates()
    {
        return $this->subordinates;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $e = [
            'name'   => $this->name,
            'dept'   => $this->dept,
            'salary' => $this->salary,
        ];
        return json_encode($e, JSON_UNESCAPED_UNICODE);
    }


}