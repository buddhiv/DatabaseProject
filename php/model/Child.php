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
    private $address;
    private $medium;
    private $applicant_nic;

    function __construct($address, $age, $applicant_nic, $date_of_birth, $medium, $name_in_full, $name_with_initials, $religion, $sex)
    {
        $this->address = $address;
        $this->age = $age;
        $this->applicant_nic = $applicant_nic;
        $this->date_of_birth = $date_of_birth;
        $this->medium = $medium;
        $this->name_in_full = $name_in_full;
        $this->name_with_initials = $name_with_initials;
        $this->religion = $religion;
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getApplicantNic()
    {
        return $this->applicant_nic;
    }

    /**
     * @return mixed
     */
    public function getMedium()
    {
        return $this->medium;
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

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $applicant_nic
     */
    public function setApplicantNic($applicant_nic)
    {
        $this->applicant_nic = $applicant_nic;
    }

    /**
     * @param mixed $medium
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
    }


}