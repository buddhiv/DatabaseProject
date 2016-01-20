<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/19/16
 * Time: 6:04 PM
 */

include_once "../php/model/Child.php";
include_once "../php/model/Applicant.php";

use Model\Child;
use Model\Applicant;


if (isset($_POST['next'])) {

    //read category
    if(isset($_POST["category"])){
        $category = $_POST["category"];
        echo $category;
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

    $child = new Child($age, $date_of_birth, $name_in_full, $name_with_initials, $religion, $sex);

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



}