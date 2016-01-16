<?php
/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/16/16
 * Time: 5:54 PM
 */

include "../model/Student.php";
include "../Connection.php";

class StudentController{

    function addStudent(Student $student){
        $connection = Connection::getInstance();
        $number = $student->getNumber();
        $name_in_full = $student->getNameInFull();
        $address = $student->getAddress();
        $registered_date= $student->getRegisterdDate();
        $grade = $student->getGrade();

        $sql = "INSERT INTO student(name_in_full, address) VALUES ($name_in_full,$address)";
        $resultset = mysqli_query($connection, $sql);
        return $resultset;
    }


}


?>