<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/19/16
 * Time: 6:55 PM
 */

namespace Model;


class Applicant {

    private $name_in_full;
    private $name_with_initials;
    private $nic;
    private $is_sri_lankan;
    private $religion;
    private $address;
    private $telephone;
    private $district;
    private $divisional_sec_area;
    private $grama_niladari_divi;

    function __construct($address, $district, $divisional_sec_area, $grama_niladari_divi, $is_sri_lankan, $name_in_full, $name_with_initials, $nic, $religion, $telephone)
    {
        $this->address = $address;
        $this->district = $district;
        $this->divisional_sec_area = $divisional_sec_area;
        $this->grama_niladari_divi = $grama_niladari_divi;
        $this->is_sri_lankan = $is_sri_lankan;
        $this->name_in_full = $name_in_full;
        $this->name_with_initials = $name_with_initials;
        $this->nic = $nic;
        $this->religion = $religion;
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
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @return mixed
     */
    public function getDivisionalSecArea()
    {
        return $this->divisional_sec_area;
    }

    /**
     * @return mixed
     */
    public function getGramaNiladariDivi()
    {
        return $this->grama_niladari_divi;
    }

    /**
     * @return mixed
     */
    public function getIsSriLankan()
    {
        return $this->is_sri_lankan;
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
    public function getNic()
    {
        return $this->nic;
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
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @param mixed $divisional_sec_area
     */
    public function setDivisionalSecArea($divisional_sec_area)
    {
        $this->divisional_sec_area = $divisional_sec_area;
    }

    /**
     * @param mixed $grama_niladari_divi
     */
    public function setGramaNiladariDivi($grama_niladari_divi)
    {
        $this->grama_niladari_divi = $grama_niladari_divi;
    }

    /**
     * @param mixed $is_sri_lankan
     */
    public function setIsSriLankan($is_sri_lankan)
    {
        $this->is_sri_lankan = $is_sri_lankan;
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
     * @param mixed $nic
     */
    public function setNic($nic)
    {
        $this->nic = $nic;
    }

    /**
     * @param mixed $religion
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }



}