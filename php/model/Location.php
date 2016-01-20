<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/19/16
 * Time: 5:51 PM
 */

namespace Model;


class Location
{
    private $year;
    private $grama_div;
    private $polling_div;
    private $polling_district;
    private $confirm;
    private $child_id;

    function __construct($year, $grama_div, $polling_div, $polling_district, $confirm, $child_id)
    {
        $this->child_id = $child_id;
        $this->confirm = $confirm;
        $this->grama_div = $grama_div;
        $this->polling_district = $polling_district;
        $this->polling_div = $polling_div;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getChildId()
    {
        return $this->child_id;
    }

    /**
     * @return mixed
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * @return mixed
     */
    public function getGramaDiv()
    {
        return $this->grama_div;
    }

    /**
     * @return mixed
     */
    public function getPollingDistrict()
    {
        return $this->polling_district;
    }

    /**
     * @return mixed
     */
    public function getPollingDiv()
    {
        return $this->polling_div;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $child_id
     */
    public function setChildId($child_id)
    {
        $this->child_id = $child_id;
    }

    /**
     * @param mixed $confirm
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;
    }

    /**
     * @param mixed $grama_div
     */
    public function setGramaDiv($grama_div)
    {
        $this->grama_div = $grama_div;
    }

    /**
     * @param mixed $polling_district
     */
    public function setPollingDistrict($polling_district)
    {
        $this->polling_district = $polling_district;
    }

    /**
     * @param mixed $polling_div
     */
    public function setPollingDiv($polling_div)
    {
        $this->polling_div = $polling_div;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }


}