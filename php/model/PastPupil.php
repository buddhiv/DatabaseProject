<?php

/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/8/2016
 * Time: 2:45 PM
 */
class PastPupil
{

    private $num_of_years_studied;
    private $extra_activities_at_school;
    private $ordianry_level;
    private $advanced_level;
    private $confirm;
    private $marks;

    /**
     * PastPupil constructor.
     * @param $num_of_years_studied
     * @param $extra_activities_at_school
     * @param $ordianry_level
     * @param $advanced_level
     * @param $confirm
     * @param $marks
     */
    public function __construct($num_of_years_studied, $extra_activities_at_school, $ordianry_level, $advanced_level, $confirm, $marks)
    {
        $this->num_of_years_studied = $num_of_years_studied;
        $this->extra_activities_at_school = $extra_activities_at_school;
        $this->ordianry_level = $ordianry_level;
        $this->advanced_level = $advanced_level;
        $this->confirm = $confirm;
        $this->marks = $marks;
    }


    public function getMarksFromNumberOfYears()
    {//get marks from student spent in school
        $this->marks = ($this->num_of_years_studied * 2);
        return $this->marks;
    }

    public function getMarksFromExtraActivitiesSchool()
    {//get marks from extra activities in school
        if ($this->extra_activities_at_school >= 10) {
            $this->marks = 25;
        } else {
            $this->marks = $this->extra_activities_at_school * 2;
        }
        return $this->marks;
    }

    public function getMarksFromAcadamicAchievement()
    {//get marks from acadamic activities in school
        $temp_marks = 0;
        if (strcmp($this->ordianry_level, "PASS") == 0) {
            $temp_marks += 10;
        }
        if (strcmp($this->advanced_level, "PASS") == 0) {
            $temp_marks += 15;
        }
        $this->marks = $temp_marks;
        return $this->marks;
    }

    public function getFullMarks()
    {
        $newmarks = $this->getMarksFromAcadamicAchievement() + $this->getMarksFromExtraActivitiesSchool() + $this->getMarksFromNumberOfYears();
        return $newmarks;
    }

    /**
     * @return mixed
     */
    public function getOrdianryLevel()
    {
        return $this->ordianry_level;
    }

    /**
     * @param mixed $ordianry_level
     */
    public function setOrdianryLevel($ordianry_level)
    {
        $this->ordianry_level = $ordianry_level;
    }

    /**
     * @return mixed
     */
    public function getAdvancedLevel()
    {
        return $this->advanced_level;
    }

    /**
     * @param mixed $advanced_level
     */
    public function setAdvancedLevel($advanced_level)
    {
        $this->advanced_level = $advanced_level;
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

    /**
     * @return mixed
     */
    public function getNumOfYearsStudied()
    {
        return $this->num_of_years_studied;
    }

    /**
     * @param mixed $num_of_years_studied
     */
    public function setNumOfYearsStudied($num_of_years_studied)
    {
        $this->num_of_years_studied = $num_of_years_studied;
    }

    /**
     * @return mixed
     */
    public function getExtraActivitiesAtSchool()
    {
        return $this->extra_activities_at_school;
    }

    /**
     * @param mixed $extra_activities_at_school
     */
    public function setExtraActivitiesAtSchool($extra_activities_at_school)
    {
        $this->extra_activities_at_school = $extra_activities_at_school;
    }

    /**
     * @return mixed
     */
    public function getAcadamicActivities()
    {
        return $this->acadamic_activities;
    }

    /**
     * @param mixed $acadamic_activities
     */
    public function setAcadamicActivities($acadamic_activities)
    {
        $this->acadamic_activities = $acadamic_activities;
    }

    /**
     * @return mixed
     */
    public function getCoActivitiesSchoolOut()
    {
        return $this->co_activities_school_out;
    }

    /**
     * @param mixed $co_activities_school_out
     */
    public function setCoActivitiesSchoolOut($co_activities_school_out)
    {
        $this->co_activities_school_out = $co_activities_school_out;
    }


}