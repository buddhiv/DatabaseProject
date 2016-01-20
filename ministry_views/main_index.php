<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/20/16
 * Time: 2:39 PM
 */


include_once "../php/model/School.php";
<<<<<<< HEAD
include_once "../php/controller/SchoolController.php";
=======
include_once "../php/controller/schoolController.php";
>>>>>>> 98062dabf35f01eb6163be0442057ab20b630c90

use Controllers\SchoolController;
use Model\School;

if (isset($_POST['add_school'])) {

    $name = $_POST["schoolname"];
    $address = $_POST["address"];
    if (isset($_POST["is_rural"])) {
        $is_rural = $_POST["is_rural"];
    }
    $district = $_POST["district"];
    $divisional_sec_area = $_POST["divisionalsecretaryarea"];
    $telephone = $_POST["schooltelephone"];
    $category = $_POST["category"];
    $capacity = $_POST["capacity"];

    $school = new School($address, $category, $district, $divisional_sec_area, $name, "", $telephone, $is_rural, $capacity);

    $school_controller = new SchoolController();
    $school_controller->addSchool($school);

    header("Location: ministry_add_school.php?success=yes");
} else {
    echo 'sdbsdf';
}