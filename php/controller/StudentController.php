<?php
/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/16/16
 * Time: 5:54 PM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Student.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);



use Model\Connection;
use Model\Student;


class StudentController
{

    function addStudent(Student $student)
    {
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $number = $student->getNumber();
        $name_in_full = $student->getNameInFull();
        $address = $student->getAddress();
        $registered_date = $student->getRegisterdDate();
        $grade = $student->getGrade();

        $stmt = $connection->prepare("INSERT INTO student(name_in_full, address) VALUES (?,?)");
        $stmt->bind_param("ss", $name_in_full,$address);
        $result = $stmt->execute();
        $stmt->close();



        return $result;
    }
}


?>