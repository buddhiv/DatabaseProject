<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/12/2016
 * Time: 10:55 PM
 */
if (file_exists('../mysql_connector.php')) {
    include '../mysql_connector.php';
}
function getMarkForStudent($school_id){
    $link = getConnection();

    $sql = "SELECT DISTINCT child.name_with_initials,child.applicant_id,marks.mark,marks.case FROM marks,school_child,child WHERE school_child.child_id=child.child_id AND marks.child_id=child.child_id AND school_child.school_id='" . $school_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}