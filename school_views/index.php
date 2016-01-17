<?php
/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/16/16
 * Time: 8:35 PM
 */

namespace Model;
include "../php/controller/StudentController.php";


if(isset($_POST['add_student'])){
    $studentController = new StudentController();

    $number = $_POST['number'];
    $name_in_full = $_POST['name_in_full'];
    $address = $_POST['address'];
    $registered_date= $_POST['date'];
    $grade = $_POST['registered_grade'];

    $student = new Student($address,$grade,$name_in_full,$number,$registered_date);
    $studentController->addStudent($student);

}



include "./add_student.php";




?>