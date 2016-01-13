<?php

/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/13/2016
 * Time: 5:51 PM
 */
class School
{
    private $school_id;
    private $name;
    private $address;
    private $district;
    private $divisional_sec_area;
    private $telephone;
    private $category;
    private $is_rural;

    /**
     * School constructor.
     * @param $address
     * @param $category
     * @param $district
     * @param $divisional_sec_area
     * @param $name
     * @param $school_id
     * @param $telephone
     */
    public function __construct($address, $category, $district, $divisional_sec_area, $name, $school_id, $telephone)
    {
        $this->address = $address;
        $this->category = $category;
        $this->district = $district;
        $this->divisional_sec_area = $divisional_sec_area;
        $this->name = $name;
        $this->school_id = $school_id;
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getDivisionalSecArea()
    {
        return $this->divisional_sec_area;
    }

    /**
     * @param mixed $divisional_sec_area
     */
    public function setDivisionalSecArea($divisional_sec_area)
    {
        $this->divisional_sec_area = $divisional_sec_area;
    }

    /**
     * @return mixed
     */
    public function getIsRural()
    {
        return $this->is_rural;
    }

    /**
     * @param mixed $is_rural
     */
    public function setIsRural($is_rural)
    {
        $this->is_rural = $is_rural;
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
     * @return mixed
     */
    public function getSchoolId()
    {
        return $this->school_id;
    }

    /**
     * @param mixed $school_id
     */
    public function setSchoolId($school_id)
    {
        $this->school_id = $school_id;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }


}