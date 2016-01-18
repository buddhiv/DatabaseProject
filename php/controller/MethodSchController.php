<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/19/2016
 * Time: 2:17 AM
 */

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