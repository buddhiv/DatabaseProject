<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/18/16
 * Time: 3:34 PM
 */

namespace Model;


class Achievement {
    private $student_id;
    private $year;
    private $case;
    private $place;
    private $exam;
    private $subject_result;

    function __construct($student_id, $year, $case, $place,  $exam, $subject_result)
    {
        $this->case = $case;
        $this->exam = $exam;
        $this->place = $place;
        $this->student_id = $student_id;
        $this->subject_result = $subject_result;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * @return mixed
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @return mixed
     */
    public function getSubjectResult()
    {
        return $this->subject_result;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $case
     */
    public function setCase($case)
    {
        $this->case = $case;
    }

    /**
     * @param mixed $exam
     */
    public function setExam($exam)
    {
        $this->exam = $exam;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @param mixed $subject_result
     */
    public function setSubjectResult($subject_result)
    {
        $this->subject_result = $subject_result;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }



}