<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/19/2016
 * Time: 12:56 PM
 */
include_once "../php/Connection.php";
include_once '../php/controller/TeacherController.php';

use Controllers\TeacherController;

$studentController = new TeacherController();

if (isset($_GET['school_id'])) {
    if ($_GET['school_id'] != "") {
        $teachers = $studentController->getLeavedTeachersBySchool($_GET['school_id']);

        echo '<option></option>';
        foreach ($teachers as $teacher) {
            echo '<option value=' . $teacher['teacher_id'] . '>' .$teacher['name_in_full'] . '</option>';
        }
    }
}
?>
