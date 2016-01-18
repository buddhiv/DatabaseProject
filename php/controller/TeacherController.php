<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/18/16
 * Time: 8:39 AM
 */
use \Model\Teacher;

if (file_exists('../mysql_connector.php')) {
    include '../mysql_connector.php';
}


if(isset($_POST['addTeacherButton'])){

    $name = $_POST['name'];
    $registered_date = $_POST['registered_date'];
    $subject = $_POST['subject'];
    $address = $_POST['address'];
    $distance = $_POST['distance'];
    $contact_number = $_POST['contact_number'];


    $teacher = new Teacher($address,$distance,$name,$contact_number,$registered_date,$subject);
    addTeacher($teacher);

    echo $sql;
}

function addTeacher(\Model\Teacher $teacher){
    $name = $teacher->getName();
    $registered_date = $teacher->getRegisteredDate();
    $subject = $teacher->getSubject();
    $address = $teacher->getAddress();
    $distance = $teacher->getDistance();
    $contact_number = $teacher->getPhoneNumber();

    $link = mysqli_get_connector::getConnection();

    $sql = "INSERT INTO teacher (subject, address, name_in_full, telephone) VALUES ( '$subject', '$address', '$name', '$contact_number')";
    $resultset = mysqli_query($link,$sql);
    return $resultset;

}