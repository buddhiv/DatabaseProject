<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/8/2016
 * Time: 4:59 PM
 */
class PresentPupil{

    private $school_spent_year;
    private $spent_years;
    private $marks;
    private $achievemnts;
    private $ownership;
    private $num_of_close_school;

    /**
     * PresentPupil constructor.
     * @param $school_spent_year
     * @param $spent_years
     * @param $marks
     * @param $achievemnts
     * @param $ownership
     * @param $num_of_close_school
     */
    public function __construct($school_spent_year, $spent_years, $marks, $achievemnts, $ownership, $num_of_close_school)
    {
        $this->school_spent_year = $school_spent_year;
        $this->spent_years = $spent_years;
        $this->marks = $marks;
        $this->achievemnts = $achievemnts;
        $this->ownership = $ownership;
        $this->num_of_close_school = $num_of_close_school;
    }

    public function getMarksFromPresenting(){
if($this->school_spent_year>=10){
    return 30;
}else{
    return $this->marks=$this->school_spent_year*3;
}
    }
    public function getMarksFromResidence(){//Calculate marks from residence
        $this->marks=$this->spent_years*3;
        if(($this->marks)<15){
            return $this->marks;
        }else{
            return 15;
        }
    }
    public function getMarksFromOwner(){//Calcualte marks from owner descriptions
        if(strcmp($this->ownership,"MOTHER")==0 ||strcmp($this->ownership,"FATHER")==0){
            $this->marks=6;
        }elseif(strcmp($this->ownership,"APPLICANT")==0){
            $this->marks=10;
        }elseif(strcmp($this->ownership,"REGIDTERED_LEASE_BOND")==0){
            $this->marks=4;
        }elseif(strcmp($this->ownership,"UNREGISTERED_LEASE_BOND")==0){
            $this->marks=2;
        }
        if($this->spent_years<5 && $this->spent_years>=3){//regulation in document
            $this->marks*=0.75;
        }elseif($this->spent_years<3){
            $this->marks*=0.5;
        }
        return $this->marks;
    }

    public function getMarksFromCloseSchools(){
        if($this->num_of_close_school==0){
            $this->marks=35;
        }else{
            $this->marks=35-($this->num_of_close_school*5);
        }
        return $this->marks;
    }

    public function getMarksFromAchievements(){//get marks from achievemnts got by brother or sister in school
        if($this->achievemnts>=5){
            $this->marks=10;
        }else{
            $this->marks=$this->achievemnts*2;
        }
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
    public function getSpentYears()
    {
        return $this->spent_years;
    }

    /**
     * @param mixed $spent_years
     */
    public function setSpentYears($spent_years)
    {
        $this->spent_years = $spent_years;
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

    /**
     * @return mixed
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * @param mixed $ownership
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;
    }

    /**
     * @return mixed
     */
    public function getNumOfCloseSchool()
    {
        return $this->num_of_close_school;
    }

    /**
     * @param mixed $num_of_close_school
     */
    public function setNumOfCloseSchool($num_of_close_school)
    {
        $this->num_of_close_school = $num_of_close_school;
    }

}