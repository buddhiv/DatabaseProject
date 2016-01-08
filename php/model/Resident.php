<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/7/2016
 * Time: 11:12 PM
 */
class Resident
{
    private $id;
    private $spent_years;
    private $ownership;
    private $num_of_close_school;
    private $confirm;
    private $marks;
    public function __construct( $id,$spent_years,$ownership,$num_of_close_school,$confirm,$marks)
    {
        $this->id=$id;
        $this->spent_years=$spent_years;
        $this->ownership=$ownership;
        $this->num_of_close_school=$num_of_close_school;
        $this->confirm=$confirm;
        $this->marks=$marks;
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

    public function getMarksFromOwner(){//Calcualte marks from owner descriptions
        if(strcmp($this->ownership,"MOTHER")==0 ||strcmp($this->ownership,"FATHER")==0){//this father mother refer to grand mother and father of child
            $this->marks=10;
        }elseif(strcmp($this->ownership,"APPLICANT")==0){
            $this->marks=15;
        }elseif(strcmp($this->ownership,"REGIDTERED_LEASE_BOND")==0){
            $this->marks=5;
        }elseif(strcmp($this->ownership,"UNREGISTERED_LEASE_BOND")==0){
            $this->marks=3;
        }
        if($this->spent_years<5 && $this->spent_years>=3){//regulation in document
            $this->marks*=0.75;
        }elseif($this->spent_years<3){
            $this->marks*=0.5;
        }
        return $this->marks;
    }
    public function getMarksFromResidence(){//Calculate marks from residence
        $this->marks=$this->spent_years*5;
        if(($this->marks)<35){
            return $this->marks;
        }else{
            return 35;
        }

    }
    public function getMarksFromCloseSchools(){
        if($this->num_of_close_school==0){
            $this->marks=50;
        }else{
            $this->marks=50-($this->num_of_close_school*5);
        }
        return $this->marks;
    }

    public function getFullMarks(){
    $tot_marks=$this->getMarksFromOwner()+$this->getMarksFromCloseSchools()+$this->getMarksFromResidence();
        return $tot_marks;
}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

}