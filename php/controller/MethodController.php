<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/13/2016
 * Time: 9:37 PM
 */
function getMethodNameFromSchoolIdt($school_id){
    $link = getConnection();

    $sql = "SELECT method.method_name,method.method_id,child.child_id FROM school_child,child,method WHERE child.child_id=school_child.child_id AND child.method_id=method.method_id AND school_child.school_id='" . $school_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}