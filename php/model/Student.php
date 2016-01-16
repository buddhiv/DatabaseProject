<?php
/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/14/16
 * Time: 2:35 AM
 */

class Student {
    private $number;
    private $name_in_full;
    private $address;
    private $registerd_date;
    private $grade;

    function __construct($address, $grade, $name_in_full, $number, $registerd_date)
    {
        $this->address = $address;
        $this->grade = $grade;
        $this->name_in_full = $name_in_full;
        $this->number = $number;
        $this->registerd_date = $registerd_date;
    }

    /**
     * @param mixed $name_in_full
     */
    public function setNameInFull($name_in_full)
    {
        $this->name_in_full = $name_in_full;
    }

    /**
     * @return mixed
     */
    public function getNameInFull()
    {
        return $this->name_in_full;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $registerd_date
     */
    public function setRegisterdDate($registerd_date)
    {
        $this->registerd_date = $registerd_date;
    }

    /**
     * @return mixed
     */
    public function getRegisterdDate()
    {
        return $this->registerd_date;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
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
    public function getAddress()
    {
        return $this->address;
    }


}

?>