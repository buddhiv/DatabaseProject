<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/18/16
 * Time: 8:38 AM
 */

namespace Model;


class Teacher {
    private $name;
    private $registered_date;
    private $subject;
    private $address;
    private $phone_number;
    private $distance;

    function __construct($address, $distance, $name, $phone_number, $registered_date, $subject)
    {
        $this->address = $address;
        $this->distance = $distance;
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->registered_date = $registered_date;
        $this->subject = $subject;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @param mixed $registered_date
     */
    public function setRegisteredDate($registered_date)
    {
        $this->registered_date = $registered_date;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
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
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @return mixed
     */
    public function getRegisteredDate()
    {
        return $this->registered_date;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }


}
