<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/18/16
 * Time: 8:39 AM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Teacher.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);

use Model\Connection;
use Model\Teacher;



class TeacherController{

    function addTeacher(Teacher $teacher){

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();


        $name_in_full = $teacher->getName();
        $subject = $teacher->getSubject();
        $address = $teacher->getAddress();
        $telephone = $teacher->getPhoneNumber();

        $registered_date = $teacher->getRegisteredDate();
        $distance = $teacher->getDistance();
        $school_id = 1;

        $stmt = $connection->prepare("INSERT INTO teacher (name_in_full, subject, address,  telephone) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $name_in_full,$subject,$address,$telephone);
        $result = $stmt->execute();
        $stmt->close();

        $teacher_id = mysqli_insert_id($connection);

        $stmt = $connection->prepare("INSERT INTO teacher_school (teacher_id,school_id,start_of_working_date,distance_from_permanent_residence) VALUES (?,?,?,?)");
        $stmt->bind_param("iisi",$teacher_id,$school_id,$registered_date,$distance);
        $result = $stmt->execute();
        $stmt->close();

        return $result;

    }

    function addTransferredTeacher($date){

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        //register leaving
        $oldSchool_id = 1;
        $teacher_id = 1;
        $transferred_date =$date;

        $stmt = $connection->prepare("UPDATE  teacher_school SET leaving_date = ? WHERE teacher_id = ? AND school_id = ?");
        $stmt->bind_param("sii", $date,$teacher_id,$oldSchool_id);
        $result = $stmt->execute();
        $stmt->close();

        //register for new school
        $newSchool_id = 2;
        $distance = 12;
        $stmt = $connection->prepare("INSERT INTO teacher_school (teacher_id,school_id,start_of_working_date,distance_from_permanent_residence) VALUES (?,?,?,?)");
        $stmt->bind_param("iisi",$teacher_id,$newSchool_id,$transferred_date,$distance);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }
}