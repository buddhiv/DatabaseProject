<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/19/16
 * Time: 6:04 PM
 */

include_once "../php/model/Child.php";
include_once "../php/model/Applicant.php";
include_once "../php/controller/ChildController1.php";
include_once "../php/controller/ApplicantController.php";

use Model\Child;
use Model\Applicant;
use Controllers\ChildController1;
use Controllers\ApplicantController;


if (isset($_POST['next'])) {

    //read category
    if(isset($_POST["category"])){
        $category = $_POST["category"];
    }

    //read child details
    $name_in_full = $_POST["nameinfull"];
    $name_with_initials = $_POST["namewithinitials"];


    if (isset($_POST["sex"])) {
        $sex = $_POST["sex"];
    }
    $religion = $_POST["religion"];
    $date_of_birth = $_POST["dateofbirth"];
    $age = $_POST["ageon31st"];
    $address = $_POST["permanentaddress"];
//    $medium = $_POST{""};
    $medium = "Sinhala";
    $applicant_nic = $_POST["applicantnic"];

    $child = new Child($address, $age, $applicant_nic, $date_of_birth, $medium, $name_in_full, $name_with_initials, $religion, $sex);

    //read Applicant details

    $name_in_full = $_POST["applicantnameinfull"];
    $name_with_initials = $_POST["applicantnamewithinitials"];
    $nic = $_POST["applicantnic"];
    if(isset($_POST["issrilankan"])){
        $is_sri_lankan = "TRUE";
    }else{
        $is_sri_lankan = "FALSE";

    }
    $religion = $_POST["applicantreligion"];
    $address = $_POST["permanentaddress"];
    $telephone = $_POST["telephone"];
    $district = $_POST["district"];
    $divisional_sec_area = $_POST["dsarea"];
    $grama_niladari_divi = $_POST["gndivision"];

    $applicant = new Applicant($address, $district, $divisional_sec_area, $grama_niladari_divi, $is_sri_lankan, $name_in_full, $name_with_initials, $nic, $religion, $telephone);


    $applicant_controller = new ApplicantController();
    $applicant_controller->addApplicant($applicant,$child);


//    $childController = new ChildController1();
//    $childController->addChild($child);
//


}