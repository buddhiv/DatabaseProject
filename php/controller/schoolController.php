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
$path .= "/DatabaseProject/php/Connection.php";
include_once($path);

use Model\Connection;

class SchoolController
{

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
}