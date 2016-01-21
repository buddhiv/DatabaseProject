<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/20/16
 * Time: 11:54 AM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Applicant.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Child.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/controller/ChildController1.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);


use Model\Connection;
use Model\Applicant;
use Model\Child;
use Controllers\ChildController1;



class ApplicantController {

    function addApplicant(Applicant $applicant){

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $name_in_full = $applicant->getNameInFull();
        $name_with_initials = $applicant->getNameWithInitials();
        $nic = $applicant->getNic();
        $is_sri_lankan = $applicant->getIsSriLankan();
        $religion = $applicant->getReligion();
        $address = $applicant->getAddress();
        $telephone = $applicant->getTelephone();
        $district =$applicant->getDistrict();
        $divisional_sec_area = $applicant->getDivisionalSecArea();
        $grama_niladari_divi = $applicant->getGramaNiladariDivi();

        $sql = "SELECT 	applicant_id FROM applicant WHERE nic = '" . $nic . "'";

        $resultset = mysqli_query($connection, $sql);
        $numberOfRows = mysqli_num_rows($resultset);

        if ($numberOfRows > 0) {
            $row = mysqli_fetch_row($resultset);
            $applicant_id = $row[0];

        } else {

            $stmt = $connection->prepare("INSERT INTO applicant (name_in_full, name_with_initials, nic, religion, address, is_sri_lankan, district, divisional_sec_area, grama_niladari_divi,telephone) VALUES (?,?,?,?,?,?,?,?,?,?)" );
            $stmt->bind_param("ssssssssss", $name_in_full, $name_with_initials, $nic, $religion, $address, $is_sri_lankan ,$district, $divisional_sec_area, $grama_niladari_divi, $telephone);
            $result = $stmt->execute();
            $stmt->close();
            $applicant_id = mysqli_insert_id($connection);
        }

        return $applicant_id;
    }
}