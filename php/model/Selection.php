<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/19/2016
 * Time: 1:45 AM
 */

class Selection{

    private $school_capacity;

    /**
     * Selection constructor.
     * @param $school_capacity
     */
    public function __construct($school_capacity)
    {
        $this->school_capacity = $school_capacity;
    }

    /**
     * @return mixed
     */
    public function getSchoolCapacity()
    {
        return $this->school_capacity;
    }

    /**
     * @param mixed $school_capacity
     */
    public function setSchoolCapacity($school_capacity)
    {
        $this->school_capacity = $school_capacity;
    }



    function getCount($select_name){
        if($select_name=="RESIDENT"){
            return 0.45*$this->school_capacity;
        }elseif($select_name=="PAST STUDENT"){
            return 0.25*$this->school_capacity;
        }elseif($select_name=="PRESENT STUDENT"){
            return 0.2*$this->school_capacity;
        }elseif($select_name=="STAFF"){
            return 0.1*$this->school_capacity;
        }
    }




}