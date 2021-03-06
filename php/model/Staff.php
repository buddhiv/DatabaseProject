<?php

/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/9/2016
 * Time: 2:12 AM
 */
namespace Model;

class Staff
{

    private $distance_permananent_address;
    private $complete_sevice_years_school_edu;
    private $period_work_rural;
    private $period_work_rural_past;
    private $current_school_stat;
    private $current_school;
    private $period_work_child_school;
    private $child_school;
    private $marks;
    private $confirm;

    /**
     * Staff constructor.
     * @param $distance_permananent_address
     * @param $complete_sevice_years_school_edu
     * @param $period_work_rural
     * @param $current_school_stat
     * @param $current_school
     * @param $period_work_child_school
     * @param $child_school
     * @param $marks
     */
    public function __construct($distance_permananent_address, $complete_sevice_years_school_edu, $period_work_rural,$period_work_rural_past ,$current_school_stat, $current_school, $period_work_child_school, $child_school,$confirm ,$marks)
    {
        $this->distance_permananent_address = $distance_permananent_address;
        $this->complete_sevice_years_school_edu = $complete_sevice_years_school_edu;
        $this->period_work_rural = $period_work_rural;
        $this->current_school_stat = $current_school_stat;
        $this->current_school = $current_school;
        $this->period_work_child_school = $period_work_child_school;
        $this->child_school = $child_school;
        $this->marks = $marks;
        $this->period_work_rural_past = $period_work_rural_past;
        $this->confirm = $confirm;
    }


    public function getMarksFromServiceYearsSchool()//okkkkkkkkkkkkkkkkkk
    {
        $this->marks = $this->complete_sevice_years_school_edu * 1;
        if ($this->marks > 25) {
            return 25;
        } else {
            return $this->marks;
        }
    }

    public function getMarksFromDistance()///okkkkkkkkkkk
    {
        if ($this->distance_permananent_address >= 100) {
            $this->marks = 35;
        } elseif ($this->distance_permananent_address >= 50 && $this->distance_permananent_address < 100) {
            $this->marks = 25;
        } elseif ($this->distance_permananent_address >= 25 && $this->distance_permananent_address < 50) {
            $this->marks = 15;
        } elseif ($this->distance_permananent_address < 25) {
            $this->marks = 5;
        }
        return $this->marks;
    }

    public function getMarksFromRuralService()
    {//getting marks for rural service
        if (strcmp($this->current_school_stat, "1") == 0) {//check for current school// 1 for rural 0 for not rural
            $this->marks = $this->period_work_rural * 6;
            if ($this->marks > 30) {
                return 30;
            } else {
                return $this->marks;
            }
        } else {//if person has worked earlier
            $this->marks = $this->period_work_rural_past * 4;
            if ($this->marks > 20) {
                return 20;
            } else {
                return $this->marks;
            }
        }
    }

    public function getMarksfromSameSchool()//okkkkkkkkkkkkkk
    {
        if (strcmp($this->current_school, $this->child_school) == 0) {
            if ($this->period_work_child_school >= 3) {
                $this->marks = 15;
            } else {
                $this->marks = 10;
            }
        }
        return $this->marks;
    }

    public function getFullMarks()
    {
        $full_marks = $this->getMarksFromDistance() + $this->getMarksFromRuralService() + $this->getMarksfromSameSchool() + $this->getMarksFromServiceYearsSchool();
        return $full_marks;
    }

    /**
     * @return mixed
     */
    public function getPeriodWorkRuralPast()
    {
        return $this->period_work_rural_past;
    }

    /**
     * @param mixed $period_work_rural_past
     */
    public function setPeriodWorkRuralPast($period_work_rural_past)
    {
        $this->period_work_rural_past = $period_work_rural_past;
    }

    /**
     * @return mixed
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * @param mixed $confirm
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;
    }



    /**
     * @return mixed
     */
    public function getDistancePermananentAddress()
    {
        return $this->distance_permananent_address;
    }

    /**
     * @param mixed $distance_permananent_address
     */
    public function setDistancePermananentAddress($distance_permananent_address)
    {
        $this->distance_permananent_address = $distance_permananent_address;
    }

    /**
     * @return mixed
     */
    public function getCompleteSeviceYearsSchoolEdu()
    {
        return $this->complete_sevice_years_school_edu;
    }

    /**
     * @param mixed $complete_sevice_years_school_edu
     */
    public function setCompleteSeviceYearsSchoolEdu($complete_sevice_years_school_edu)
    {
        $this->complete_sevice_years_school_edu = $complete_sevice_years_school_edu;
    }

    /**
     * @return mixed
     */
    public function getPeriodWorkRural()
    {
        return $this->period_work_rural;
    }

    /**
     * @param mixed $period_work_rural
     */
    public function setPeriodWorkRural($period_work_rural)
    {
        $this->period_work_rural = $period_work_rural;
    }

    /**
     * @return mixed
     */
    public function getCurrentSchoolStat()
    {
        return $this->current_school_stat;
    }

    /**
     * @param mixed $current_school_stat
     */
    public function setCurrentSchoolStat($current_school_stat)
    {
        $this->current_school_stat = $current_school_stat;
    }

    /**
     * @return mixed
     */
    public function getCurrentSchool()
    {
        return $this->current_school;
    }

    /**
     * @param mixed $current_school
     */
    public function setCurrentSchool($current_school)
    {
        $this->current_school = $current_school;
    }

    /**
     * @return mixed
     */
    public function getPeriodWorkChildSchool()
    {
        return $this->period_work_child_school;
    }

    /**
     * @param mixed $period_work_child_school
     */
    public function setPeriodWorkChildSchool($period_work_child_school)
    {
        $this->period_work_child_school = $period_work_child_school;
    }

    /**
     * @return mixed
     */
    public function getChildSchool()
    {
        return $this->child_school;
    }

    /**
     * @param mixed $child_school
     */
    public function setChildSchool($child_school)
    {
        $this->child_school = $child_school;
    }

    /**
     * @return mixed
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * @param mixed $marks
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;
    }

}