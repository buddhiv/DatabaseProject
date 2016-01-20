<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/19/2016
 * Time: 12:56 PM
 */
include_once "../php/Connection.php";
include_once '../php/controller/SchoolController.php';
include_once '../php/controller/StudentController.php';

$schoolController = new \Controllers\SchoolController();
$studentController = new \Controllers\StudentController();

if (isset($_GET['district'])) {
    if ($_GET['district'] != "") {
        $schools = $schoolController->getSchoolsFromDistrict($_GET['district']);

        echo '<option></option>';
        foreach ($schools as $school) {
            echo '<option value="' . $school['school_id'] . '">' . $school['name'] . '</option >';
        }
    }
}
?>
