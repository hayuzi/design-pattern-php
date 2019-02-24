<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/2/24
 * Time: 17:05
 */

namespace Lib\DesignPattern\Filter;


class CriteriaFemale implements CriteriaInterface
{

    /**
     * 过滤标准
     * 
     * @param array $persons
     * @return array|mixed
     */
    public function meetCriteria($persons = [])
    {
        $femalePersons = [];
        foreach ($persons as $k => $v) {
            /** @var $v Person */
            if ($v->getGender() == Person::GENDER_FEMALE) {
                $femalePersons[] = $v;
            }
        }
        return $femalePersons;
    }

}