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
include_once "../php/controller/ChildController1.php";
include_once "../php/controller/ApplicantController.php";
include_once "../php/controller/ApplicationMethodController.php";


use Controllers\ApplicantController;
use Controllers\ApplicationMethodController;
use Model\Applicant;
use Model\Child;
use Model\Resident;


if (isset($_POST['next'])) {

    //read category
    if (isset($_POST["category"])) {
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
    $medium = "Sinhala";
    $applicant_nic = $_POST["applicantnic"];

    $child = new Child($address, $age, $applicant_nic, $date_of_birth, $medium, $name_in_full, $name_with_initials, $religion, $sex);

    //read Applicant details

    $name_in_full = $_POST["applicantnameinfull"];
    $name_with_initials = $_POST["applicantnamewithinitials"];
    $nic = $_POST["applicantnic"];
    if (isset($_POST["issrilankan"])) {
        $is_sri_lankan = "TRUE";
    } else {
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
    $applicant_controller->addApplicant($applicant, $child);

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

    $childController = new ChildController1();
    $childController->addChild($child);


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

