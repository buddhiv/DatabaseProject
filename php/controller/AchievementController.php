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
        $school_id = $achievement->getSchoolId();
        $achievement_case = $achievement->getAchievementCase();

        $date = $achievement->getDate();
        $case = $achievement->getCase();
        $place = $achievement->getPlace();

        $stmt = $connection->prepare("INSERT INTO achievement (student_id, school_id, achievement_case) VALUES (?,?,?)");
        $stmt->bind_param("iis", $student_id,$school_id,$achievement_case);
        $result =  $stmt->execute();
        $stmt->close();
        $achievement_id = mysqli_insert_id($connection);

        $stmt = $connection->prepare("INSERT INTO non_acadamic (achievement_id,ncase,place,date) VALUES (?,?,?,?)");
        $stmt->bind_param("isis",$achievement_id,$case,$place,$date);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    function addAcademicAchievement(Achievement $achievement){

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $student_id = $achievement->getStudentId();

        $ol = $achievement->getOl();
        $al = $achievement->getAl();
        $achievement_case = $achievement->getAchievementCase();
        $school_id = $achievement->getSchoolId();

        $stmt = $connection->prepare("INSERT INTO achievement (student_id, school_id, achievement_case) VALUES (?,?,?)");
        $stmt->bind_param("iis", $student_id,$school_id,$achievement_case);
        echo($student_id." ".$school_id." ".$achievement_case);
        $result = $stmt->execute();
        $stmt->close();


        $achievement_id = mysqli_insert_id($connection);

        $stmt = $connection->prepare("INSERT INTO acadamic (achievement_id,ordinary_level,advanced_level) VALUES (?,?,?)");

        $stmt->bind_param("iss",$achievement_id,$ol,$al);

        $result = $stmt->execute();

        $stmt->close();

        return $result;
    }


} 