<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/7/2016
 * Time: 11:31 AM
 */

if (file_exists('../mysql_connector.php')) {
    require '../mysql_connector.php';
}

if (true) {

}

function getConnection()
{
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "grade_one";

    $connection = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_name");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $connection;
}

function getAllSchools()
{
    $link = getConnection();
    $sql = "SELECT school_id,name,district FROM school";

    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);

    return $resultset;
}

function getSchool($school_id)
{
    $link = getConnection();
    $sql = "SELECT name FROM school WHERE school_id='" . $school_id . "'";

    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);

    return $resultset;
}

function getAllSchoolNames()
{
    $link = getConnection();
    $sql = "SELECT school_id, name, district FROM school";

    $resultset = mysqli_query($link, $sql);
//    echo mysqli_num_rows($resultset);
    mysqli_close($link);

    return $resultset;
}