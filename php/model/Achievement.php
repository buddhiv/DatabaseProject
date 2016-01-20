<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/18/16
 * Time: 3:34 PM
 */

namespace Model;


class Achievement {
    private $achievement_id;
    private $student_id;
    private $school_id;
    private $case;
    private $ol;
    private $al;
    private $place;
    private $achievement_case;
    private $date;

    function __construct($student_id,$school_id,$achievement_case)
    {
        $this->student_id = $student_id;
        $this->school_id = $school_id;
        $this->achievement_case = $achievement_case;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $achievement_case
     */



    public function setAchievementCase($achievement_case)
    {
        $this->achievement_case = $achievement_case;
    }

    /**
     * @return mixed
     */
    public function getAchievementCase()
    {
        return $this->achievement_case;
    }

    /**
     * @param mixed $achievement_id
     */
    public function setAchievementId($achievement_id)
    {
        $this->achievement_id = $achievement_id;
    }

    /**
     * @return mixed
     */
    public function getAchievementId()
    {
        return $this->achievement_id;
    }

    /**
     * @param mixed $al
     */
    public function setAl($al)
    {
        $this->al = $al;
    }

    /**
     * @return mixed
     */
    public function getAl()
    {
        return $this->al;
    }

    /**
     * @param mixed $case
     */
    public function setCase($case)
    {
        $this->case = $case;
    }

    /**
     * @return mixed
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * @param mixed $ol
     */
    public function setOl($ol)
    {
        $this->ol = $ol;
    }

    /**
     * @return mixed
     */
    public function getOl()
    {
        return $this->ol;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $school_id
     */
    public function setSchoolId($school_id)
    {
        $this->school_id = $school_id;
    }

    /**
     * @return mixed
     */
    public function getSchoolId()
    {
        return $this->school_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }



}