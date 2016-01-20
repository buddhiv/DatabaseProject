<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/20/16
 * Time: 2:39 PM
 */


include_once "../php/model/School.php";
include_once "../php/controller/SchoolController.php";


use Model\School;
use Controllers\SchoolController;

if(isset($_POST['add_school'])){

    $name = $_POST["schoolname"];
    $address = $_POST["address"];
    if(isset($_POST["is_rural"])){
        $is_rural = $_POST["is_rural"];
    }
    $district = $_POST["district"];
    $divisional_sec_area = $_POST["Secretary Area"];
    $telephone = $_POST["schooltelephone"];
    $category = $_POST["category"];
    $capacity = $_POST["capacity"];

    $school = new School($address, $category, $district, $divisional_sec_area, $name, "", $telephone,$is_rural,$capacity);

    $school_controller = new SchoolController();
    $school_controller->addSchool($school);
}