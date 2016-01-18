<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/15/2016
 * Time: 7:05 PM
 */

function getAllSchoolTeacherWork($method_id){
    $link = getConnection();

    $sql = "SELECT teacher_school.school_id,teacher_school.teacher_id,staff_method.confirm FROM teacher_school,staff_method WHERE teacher_school.teacher_id=staff_method.teacher_id AND method_id='" . $method_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}

function getDistanceForCurrentPlace($school_id){
    $link = getConnection();

    $sql = "SELECT DISTINCT teacher_school.teacher_id,teacher_school.school_id,teacher_school.distance_from_permanent_residence FROM teacher_school,staff_method WHERE teacher_school.leaving_date=0000-00-00 AND school_id='" . $school_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}
function getChildSchool($teacher_id){
    $link = getConnection();

    $sql = "SELECT school_child.school_id FROM school_child,child,staff_method WHERE school_child.child_id=child.child_id AND child.method_id=staff_method.method_id AND staff_method.teacher_id='" . $teacher_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}

function getPermanentWorkingYears($method_id){
    $link = getConnection();

    $sql = "SELECT SUM(TIMESTAMPDIFF(year,teacher_school.start_of_working_date,teacher_school.leaving_date)) AS working_years FROM teacher_school,staff_method WHERE teacher_school.teacher_id=staff_method.teacher_id AND staff_method.method_id='" . $method_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}

function getCurrentSchoolStatWithYears($school_id){
    $link = getConnection();

    $sql = "SELECT DISTINCT TIMESTAMPDIFF(year,teacher_school.start_of_working_date,CURRENT_DATE()) AS working_years_rural,school.is_rural FROM teacher_school,staff_method,school WHERE teacher_school.school_id=school.school_id AND teacher_school.leaving_date=0000-00-00 AND school.school_id='" . $school_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}

function getPastSchoolStatWithYears($school_id){
    $link = getConnection();

    $sql = "SELECT TIMESTAMPDIFF(year,teacher_school.start_of_working_date,teacher_school.leaving_date) AS working_years_rural_past, school.is_rural FROM teacher_school,school WHERE teacher_school.school_id=school.school_id AND school.school_id='" . $school_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}
