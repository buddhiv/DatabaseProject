<?php
/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/16/16
 * Time: 8:35 PM
 */
include "../php/controller/StudentController.php";

if(isset($_POST['add_student'])){
    $studentController = new StudentController();

    $number = $_GET['number'];
    $name_in_full = $_GET['name_in_full'];
    $address = $_GET['address'];
    $registered_date= $_GET['date'];
    $grade = $_GET['grade'];

    $student = new Student($address,$grade,$name_in_full,$number,$registered_date);
    $studentController->addStudent($student);

}



include "./add_student.php";




?>