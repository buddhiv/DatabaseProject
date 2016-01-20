<?php
/**
 *
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/7/2016
 * Time: 11:31 AM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/School.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);



use Model\Connection;
use Model\School;


class SchoolController
{

    function addSchool(School $school){
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $school_id=$_SESSION['school_id'];
        $name=$school->getName();
        $address=$school->getAddress();
        $district=$school->getDistrict();
        $divis_sec_area=$school->getDivisionalSecArea();
        $telephone=$school->getTelephone();
        $category=$school->getCategory();
        $is_rural=$school->getIsRural();
        $capacity=$school->getCapacity();

        $stmt = $connection->prepare("INSERT INTO school(school_id,name,address,district,divisional_sec_area,telephone,category,is_rural,capacity) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssii", $school_id,$name,$address,$district,$divis_sec_area,$telephone,$category,$is_rural,$capacity);
        $result = $stmt->execute();
        $stmt->close();
        return $result;

    }

    function getAllSchools()
    {
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();
        $sql = "SELECT school_id,name,district FROM school";

        $resultset = mysqli_query($connection, $sql);

        return $resultset;
    }

    function getSchool($school_id)
    {
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();
        $sql = "SELECT name FROM school WHERE school_id='" . $school_id . "'";

        $resultset = mysqli_query($connection, $sql);

        return $resultset;
    }

    function getAllSchoolNames()
    {
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();
        $sql = "SELECT school_id, name, district FROM school";

        $resultset = mysqli_query($connection, $sql);

        return $resultset;
    }

    function getSchoolById($school_id)
    {
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();
        $sql = "SELECT * FROM school WHERE school_id=" . $school_id;

        $resultset = mysqli_query($connection, $sql);

        return $resultset;
    }

    function getSchoolsFromDistrict($district)
    {
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();
        $sql = "SELECT * FROM school WHERE district='" . $district . "'";

        $resultset = mysqli_query($connection, $sql);

        return $resultset;
    }

    function checkForLogIn($school_id,$password)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $sql = mysqli_query($connection, "SELECT name FROM school WHERE $school_id='$school_id' AND password='$password' LIMIT 1");

        $existCount = mysqli_num_rows($sql);
        if ($existCount == 1) {
            while ($row = mysqli_fetch_array($sql)) {
                $name = $row["name"];
            }
            $_SESSION["school_id"] = $school_id;
            $_SESSION["school_name"] = $name;
            return 1;
        }
        return 0;
    }



}