<?php
/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/16/16
 * Time: 8:35 PM
 */

include_once "../php/controller/StudentController.php";
include_once "../php/controller/TeacherController.php";
include_once "../php/controller/AchievementController.php";


include_once "../php/model/Student.php";
include_once "../php/model/Teacher.php";
include_once "../php/model/Achievement.php";


use Controllers\StudentController;
use Controllers\TeacherController;
use Controllers\AchievementController;

use Model\Student;
use Model\Teacher;
use Model\Achievement;


if(isset($_POST['add_student'])){
    $studentController = new StudentController();

    $number = $_POST['number'];
    $name_in_full = $_POST['name_in_full'];
    $address = $_POST['address'];
    $registered_date= $_POST['date'];
    $grade = $_POST['registered_grade'];

    $student = new Student($address,$grade,$name_in_full,$number,$registered_date);
    $studentController->addStudent($student);

    include "add_student.php";
}elseif(isset($_POST['add_transferred_student'])){
    $studentController = new StudentController();

    $number = $_POST['number'];
    $student_id = $_POST['studentsforschool'];
    $registered_date= $_POST['date'];
    $grade = $_POST['registered_grade'];
    $address ="";
    $name_in_full = "";

    $student = new Student($address,$grade,$name_in_full,$number,$registered_date);
    $student->setStudentId($student_id);

    include "add_transferred_student.php";
}elseif(isset($_POST['add_teacher'])){

    $name = $_POST['name'];
    $registered_date = $_POST['registered_date'];
    $subject = $_POST['subject'];
    $address = $_POST['address'];
    $distance = $_POST['distance'];
    $contact_number = $_POST['contact_number'];

    $teacher = new Teacher($address,$distance,$name,$contact_number,$registered_date,$subject);
    $teacherController = new TeacherController;
    $teacherController->addTeacher($teacher);
    include "add_transferred_student.php";
}elseif(isset($_POST['add_non_academic_achievement'])){

    $student_id = $_POST["size"];
    $date = $_POST["date"];
    $case = $_POST["case"];
    $place = $_POST["place"];

    $achievement = new Achievement($student_id,$date,$case,$place,'','');

    $achievement_controller = new AchievementController();
    $achievement_controller->addNonAcademicAchievement($achievement);


}elseif(isset($_POST['addAcademicAchievement'])){

    $student_id = $_POST["size"];
    $date = $_POST["date"];
    $exam = $_POST["exam"];
    $result = $_POST["comment"];

    $achievement = new Achievement($student_id,$date,"","",$exam,$result);

    $achievement_controller = new AchievementController();
    $achievement_controller->addAcademicAchievement($achievement);

}elseif(isset($_POST['add_transferred_teacher'])){

    $date = $_POST["date"];

    $add_teacher = new TeacherController();
    $add_teacher->addTransferredTeacher($date);


}elseif(isset($_POST['add_leaving_record'])){
    $school_id =  1;              //$_SESSION["school_id"];
    $student_id = $_POST["student_id"];
    $date = $_POST["date"];

    $studentController = new StudentController();
    $studentController->addLeavingRecord($school_id,$student_id,$date);

    include "./leaving_record.php";
}else{
    include "school_index.php";
}








?>