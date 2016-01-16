<?php

/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/8/2016
 * Time: 4:59 PM
 */
class PresentPupil
{

    private $school_spent_year;
    private $marks;
    private $achievemnts;
    private $confirm;


    /**
     * PresentPupil constructor.
     * @param $school_spent_year
     * @param $spent_years
     * @param $marks
     * @param $achievemnts
     * @param $ownership
     * @param $num_of_close_school
     */
    public function __construct($school_spent_year, $achievemnts,$confirm,$marks)
    {
        $this->school_spent_year = $school_spent_year;
        $this->marks = $marks;
        $this->achievemnts = $achievemnts;
        $this->confirm = $confirm;
    }

    public function getMarksFromPresenting()
    {
        if ($this->school_spent_year >= 10) {
            return 60;
        } else {
             $this->marks = $this->school_spent_year * 6;
        }
        return $this->marks;
    }


    public function getMarksFromAchievements()
    {//get marks from achievemnts got by brother or sister in school
        if ($this->achievemnts >= 10) {
            return 40;
        } else {
             $this->marks = $this->achievemnts * 4;
        }
        return $this->marks;
    }
public function getFullMarks(){
    $new_marks=$this->getMarksFromAchievements()+$this->getMarksFromPresenting();
    return $new_marks;
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
    public function getSchoolSpentYear()
    {
        return $this->school_spent_year;
    }

    /**
     * @param mixed $school_spent_year
     */
    public function setSchoolSpentYear($school_spent_year)
    {
        $this->school_spent_year = $school_spent_year;
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
    public function getAchievemnts()
    {
        return $this->achievemnts;
    }

    /**
     * @param mixed $achievemnts
     */
    public function setAchievemnts($achievemnts)
    {
        $this->achievemnts = $achievemnts;
    }


}