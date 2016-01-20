<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/19/16
 * Time: 6:16 PM
 */

namespace Model;


class Child {
    private $name_in_full;
    private $name_with_initials;
    private $sex;
    private $religion;
    private $date_of_birth;
    private $age;

    function __construct($age, $date_of_birth, $name_in_full, $name_with_initials, $religion, $sex)
    {
        $this->age = $age;
        $this->date_of_birth = $date_of_birth;
        $this->name_in_full = $name_in_full;
        $this->name_with_initials = $name_with_initials;
        $this->religion = $religion;
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * @return mixed
     */
    public function getNameInFull()
    {
        return $this->name_in_full;
    }

    /**
     * @return mixed
     */
    public function getNameWithInitials()
    {
        return $this->name_with_initials;
    }

    /**
     * @return mixed
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * @param mixed $name_in_full
     */
    public function setNameInFull($name_in_full)
    {
        $this->name_in_full = $name_in_full;
    }

    /**
     * @param mixed $name_with_initials
     */
    public function setNameWithInitials($name_with_initials)
    {
        $this->name_with_initials = $name_with_initials;
    }

    /**
     * @param mixed $religion
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }




}