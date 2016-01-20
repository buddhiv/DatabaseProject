<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/20/16
 * Time: 9:16 AM
 */
namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Child.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);


use Model\Connection;
use Model\Child;


class ChildController1
{

    function addChild(Child $child , $Applicant_id)
    {

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $name_in_full = $child->getNameInFull();
        $name_with_initials = $child->getNameWithInitials();
        $sex = $child->getSex();
        $religion = $child->getReligion();
        $date_of_birth = $child->getDateOfBirth();
        $age = $child->getAge();
        $address = $child->getAddress();
        $medium = $child->getMedium();
        $applicant_nic = $child->getApplicantNic();

        $applicant_id = $Applicant_id;
        $method_id = 1;
        $Location_infolocation_info_id = 5;

        //check existing child

        $sql = "SELECT 	child_id FROM child WHERE name_in_full = '" . $name_in_full . "' AND address = '" . $address . "'";
        $resultset = mysqli_query($connection, $sql);

        $numberOfRows = mysqli_num_rows($resultset);

        if ($numberOfRows > 0) {
            $row = mysqli_fetch_row($resultset);
            echo $row[0];
            echo "exist";
        } else {
            // no data matched
            echo "not exist";
            $stmt = $connection->prepare("INSERT INTO child (name_in_full, name_with_initials, date_of_birth, religion, sex, address, medium, Location_infolocation_info_id, applicant_id, method_id) VALUES (?,?,?,?,?,?,?,?,?,?)" );
            $stmt->bind_param("sssssssiii", $name_in_full, $name_with_initials, $date_of_birth, $religion, $sex, $address ,$medium, $Location_infolocation_info_id, $applicant_id, $method_id);
            $result = $stmt->execute();
            $stmt->close();
            return $result;
        }
    }
}