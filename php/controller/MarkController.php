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

    $sql = "SELECT child.name_with_initials,child.applicant_id,marks.mark,marks.case,method.method_name FROM marks,school_child,child,method WHERE method.method_id=child.method_id AND school_child.child_id=child.child_id AND marks.child_id=child.child_id AND school_child.school_id='" . $school_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}

function insertMarksForChild($case,$marks,$child_id){// should inclide the insert statement
    $link = getConnection();

    $sql = "INSERT INTO marks VALUES (null,'$case','$marks','$child_id')";
    mysqli_query($link, $sql);
    mysqli_close($link);

}

function updateMarksForChild($case,$child_id){// should inclide the insert statement
    $link = getConnection();

    $sql = "UPDATE marks SET marks.case='" . $case . "' WHERE child_id='" . $child_id . "'";
    mysqli_query($link, $sql);
    mysqli_close($link);

}

function getMethod($school_id){
    $link = getConnection();

    $sql = "SELECT DISTINCT method.method_id,method.method_name,child.child_id FROM method,school_child,child WHERE method.method_id=child.method_id AND child.child_id=school_child.child_id AND school_child.school_id='" . $school_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;

}

function getResidentSelection($school_id){
    $link = getConnection();

    $sql = "SELECT method.method_id,method.method_name,child.child_id,marks.mark FROM method,school_child,child,marks WHERE marks.child_id=child.child_id AND school_child.child_id=child.child_id AND method.method_id=child.method_id AND method.method_name='RESIDENT' AND school_child.school_id='" . $school_id . "' ORDER BY marks.mark";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;

}

function getPastStudentSelection($school_id){
    $link = getConnection();

    $sql = "SELECT method.method_id,method.method_name,child.child_id,marks.mark FROM method,school_child,child,marks WHERE marks.child_id=child.child_id AND school_child.child_id=child.child_id AND method.method_id=child.method_id AND method.method_name='PAST STUDENT' AND school_child.school_id='" . $school_id . "' ORDER BY marks.mark";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;

}
function getPresentStudentSelection($school_id){
    $link = getConnection();

    $sql = "SELECT method.method_id,method.method_name,child.child_id,marks.mark FROM method,school_child,child,marks WHERE marks.child_id=child.child_id AND school_child.child_id=child.child_id AND method.method_id=child.method_id AND method.method_name='PRESENT STUDENT' AND school_child.school_id='" . $school_id . "' ORDER BY marks.mark";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;

}