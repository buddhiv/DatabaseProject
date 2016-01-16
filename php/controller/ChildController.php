<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/7/2016
 * Time: 11:31 AM
 */
if (file_exists('../mysql_connector.php')) {
    include '../mysql_connector.php';
}
function getChildrenCount($school_id)
{
    $link = getConnection();
    $sql = "SELECT COUNT(child_id) AS count_child FROM school_child WHERE school_id='" . $school_id . "'";

    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);

    return $resultset;
}

function getChildApplication($school_id){
    $link = getConnection();

    $sql = "SELECT child.child_id,applicant_id,name_with_initials,method_id FROM child,school_child WHERE school_child.school_id='" . $school_id . "' AND school_child.child_id=child.child_id";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;

}
