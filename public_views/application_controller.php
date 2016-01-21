<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/19/16
 * Time: 6:04 PM
 */

include_once "../php/model/Child.php";
include_once "../php/model/Applicant.php";
include_once "../php/model/Resident.php";
include_once "../php/model/Location.php";
include_once "../php/controller/ChildController1.php";
include_once "../php/controller/ApplicantController.php";
include_once "../php/controller/ApplicationMethodController.php";
include_once "../php/controller/LocationController.php";
include_once "../php/controller/ChildController1.php";



use Controllers\ApplicantController;
use Controllers\ApplicationMethodController;
use Controllers\LocationController;
use Controllers\ChildController1;
use Model\Applicant;
use Model\Child;
use Model\Resident;
use Model\Location;


if (isset($_POST['next'])) {

    //read category
    if (isset($_POST["category"])) {
        $category = $_POST["category"];
    }

    //read applicant
    $name_in_full = $_POST["applicantnameinfull"];
    $name_with_initials = $_POST["applicantnamewithinitials"];
    $nic = $_POST["applicantnic"];
    if (isset($_POST["issrilankan"])) {
        $is_sri_lankan = 1;
    } else {
        $is_sri_lankan = 0;

    }
    $religion = $_POST["applicantreligion"];
    $address = $_POST["permanentaddress"];
    $telephone = $_POST["telephone"];
    $district = $_POST["district"];
    $divisional_sec_area = $_POST["dsarea"];
    $grama_niladari_divi = $_POST["gndivision"];
    $applicant_nic = $_POST["applicantnic"];

    $applicant = new Applicant($address, $district, $divisional_sec_area, $grama_niladari_divi, $is_sri_lankan, $name_in_full, $name_with_initials, $nic, $religion, $telephone);

    $applicant_controller = new ApplicantController();
    $applicant_id = $applicant_controller->addApplicant($applicant);


    //read child details
    $name_in_full = $_POST["nameinfull"];
    $name_with_initials = $_POST["namewithinitials"];

    if (isset($_POST["sex"])) {
        $sex = $_POST["sex"];
    }
    $religion = $_POST["religion"];
    $date_of_birth = $_POST["dateofbirth"];
    $age = null;
    $address = $_POST["permanentaddress"];
    $medium = "Sinhala";

    $child = new Child($address, $age, $applicant_nic, $date_of_birth, $medium, $name_in_full, $name_with_initials, $religion, $sex);

    $childController = new ChildController1();
    $child_id = $childController->addChild($child,$applicant_id);


    for ($year = date("Y"); $year >= (date("Y") - 4); $year--) {
        $year = $year;
        $grama_div = $_POST['gndivision' . $year];
        $polling_div = $_POST['pollingdivision' . $year];
        $polling_district = $_POST['district' . $year];
        $confirm = 0;
        $location = new Location($year, $grama_div, $polling_div, $polling_district, $confirm, $child_id);

        $location_controller = new LocationController();
        $location_controller->addLocations($location,$child_id);

    }



    if ($category == 'Resident') {
        header('Location: category_form.php?type=resident');
    } else if ($category == 'Staff') {
        header('Location: category_form.php?type=staff');
    } else if ($category == 'PastPupil') {
        header('Location: category_form.php?type=pastpupil');
    } else if ($category == 'PresentPupil') {
        header('Location: category_form.php?type=presentpupil');
    }


    //Resident Method


}
//Resident category
if (isset($_POST['resident_next'])) {

    $noofyears_spouse = $_POST["noofyears_spouse"];
    $noofyears_applicant = $_POST["noofyears_applicant"];
    if ($noofyears_applicant > $noofyears_spouse) {
        $spent_years = $noofyears_applicant;
    } else {
        $spent_years = $noofyears_spouse;
    }

    $ownership = $_POST["owner_ship"];
    $num_of_close_school = $_POST["close_school"];

    echo $spent_years;
    $resident = new Resident(null, null, $spent_years, $ownership, $num_of_close_school, null, null);

    $category_controller = new ApplicationMethodController();
    $category_controller->addResidentDetails($resident);

}

if (isset($_POST['staff_next'])) {

    $teacher_id = $_POST["teachers"];

    $category_controller = new ApplicationMethodController();
    $category_controller->addStaffMethod($teacher_id);

}
if (isset($_POST['past_pupil_next'])) {

    $past_pupil_id = $_POST["past_pupil_id"];

    $category_controller = new ApplicationMethodController();
    $category_controller->addPastPupilMethod($past_pupil_id);

}
if (isset($_POST['present_pupil_next'])) {

    $present_pupil_id = $_POST["present_pupil_id"];

    $category_controller = new ApplicationMethodController();
    $category_controller->addPresentPupilMethod($present_pupil_id);

}
