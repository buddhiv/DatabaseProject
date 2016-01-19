<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/19/2016
 * Time: 12:56 PM
 */
include_once "../php/Connection.php";
include_once '../php/controller/StudentController.php';

use Controllers\StudentController;

$studentController = new StudentController();

if (isset($_GET['school_id'])) {
    if ($_GET['school_id'] != "") {
        $students = $studentController->getStudentsBySchool($_GET['school_id']);

        echo '<option></option>';
        foreach ($students as $student) {
            echo '<option value="' . $student['student_id'] . '">' . $student['number'] . " - " . $student['name_in_full'] . '</option>';
        }
    }
}
?>
