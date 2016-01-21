<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/21/16
 * Time: 1:15 AM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Resident.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);

use Model\Connection;
use Model\Resident;


class ApplicationMethodController
{

    function addResidentDetails(Resident $resident)
    {

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();
        $spent_years = $resident->getSpentYears();
        $ownership = $resident->getOwnership();
        $num_of_close_school = $resident->getNumOfCloseSchool();
        $confirm = 0;
        $category = "RESIDENT";

        $sql = "INSERT INTO method (method_name) VALUES ('" . $category . "')";
        $result = mysqli_query($connection, $sql);
        $method_id = mysqli_insert_id($connection);

        $stmt = $connection->prepare("INSERT INTO resident_method (method_id, num_of_years_spent, ownership, num_of_closes_schools,confirm)
                                    VALUES (?,?,?,?,?)");
        $stmt->bind_param("iisii", $method_id, $spent_years, $ownership, $num_of_close_school, $confirm);
        $result = $stmt->execute();
        $stmt->close();
        echo $spent_years;
        return $result;

    }

    function addPresentPupilMethod($present_pupil_id)
    {

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $category = "PRESENT STUDENT";
        $confirm = 0;

        $sql = "INSERT INTO method (method_name) VALUES ('" . $category . "')";
        $result = mysqli_query($connection, $sql);
        $method_id = mysqli_insert_id($connection);

        $sql = "INSERT INTO present_pupil_method (student_id,method_id,confirm) VALUES (" . $present_pupil_id . "," . $method_id . "," . $confirm . ")";
        $result = mysqli_query($connection, $sql);

    }

    function addStaffMethod($teacher_id)
    {

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $category = "STAFF";
        $confirm = 0;

        $sql = "INSERT INTO method (method_name) VALUES ('" . $category . "')";
        $result = mysqli_query($connection, $sql);
        $method_id = mysqli_insert_id($connection);

        $sql = "INSERT INTO staff_method (teacher_id,method_id,confirm) VALUES (" . $teacher_id . "," . $method_id . "," . $confirm . ")";
        $result = mysqli_query($connection, $sql);

    }

    function addPastPupilMethod($past_pupil_id)
    {

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $category = "PAST STUDENT";
        $confirm = 0;

        $sql = "INSERT INTO method (method_name) VALUES ('" . $category . "')";
        $result = mysqli_query($connection, $sql);
        $method_id = mysqli_insert_id($connection);

        $sql = "INSERT INTO past_pupil_method (student_id,method_id,confirm) VALUES (" . $past_pupil_id . "," . $method_id . "," . $confirm . ")";
        $result = mysqli_query($connection, $sql);

    }

} 