<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/18/16
 * Time: 10:15 PM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Achievement.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);

use Model\Connection;
use Model\Achievement;



class AchievementController {

    function addNonAcademicAchievement(Achievement $achievement){

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $student_id = $achievement->getStudentId();
        $year = $achievement->getYear();
        $case = $achievement->getCase();
        $place = $achievement->getPlace();
        $school_id = 1;


        $stmt = $connection->prepare("INSERT INTO achievement (student_id, school_id, year) VALUES (?,?,?)");
        $stmt->bind_param("iis", $student_id,$school_id,$year);
        $result = $stmt->execute();
        $stmt->close();

        $achievement_id = mysqli_insert_id($connection);

        $stmt = $connection->prepare("INSERT INTO non acadamic (achievement_id,case,place) VALUES (?,?,?)");
        $stmt->bind_param("iss",$achievement_id,$case,$place);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    function addAcademicAchievement(Achievement $achievement){

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $student_id = $achievement->getStudentId();
        $year = $achievement->getYear();
        $exam = $achievement->getExam();
        $exam_result = $achievement->getSubjectResult();
        $school_id = 1; //need to edit


        $stmt = $connection->prepare("INSERT INTO achievement (student_id, school_id, year) VALUES (?,?,?)");
        $stmt->bind_param("iis", $student_id,$school_id,$year);
        $result = $stmt->execute();
        $stmt->close();

        $achievement_id = mysqli_insert_id($connection);

        $stmt = $connection->prepare("INSERT INTO acadamic (achievement_id,exam,result) VALUES (?,?,?)");
        $stmt->bind_param("iss",$achievement_id,$exam,$exam_result);
        $result = $stmt->execute();
        $stmt->close();

        return $result;


    }


} 