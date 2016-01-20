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
        $presentpupils = $studentController->getPresentPupilsBySchool($_GET['school_id']);

        echo '<option></option>';
        foreach ($presentpupils as $pupil) {
            echo '<option value="' . $pupil['student_id'] . '">' . $pupil['name_in_full'] . '</option>';
        }
    }
}
?>
