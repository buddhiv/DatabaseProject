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
        $school_id = 1;                 //  NEED TO CHANGE
        $is_old_boy = 0;

        $stmt = $connection->prepare("INSERT INTO student(name_in_full, address) VALUES (?,?)");
        $stmt->bind_param("ss", $name_in_full, $address);
        $result = $stmt->execute();
        $stmt->close();

        $student_id = mysqli_insert_id($connection);
        $stmt = $connection->prepare("INSERT INTO student_school(student_id, school_id, registered_date,is_old_boy, starting_grade, registration_number) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssiss", $student_id, $school_id, $registered_date, $is_old_boy, $grade, $number);
        $result = $stmt->execute();
        $stmt->close();


        return $result;
    }

    function getStudentsBySchool($school_id)
    {
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $sql = "SELECT * FROM student_school LEFT JOIN student on student.student_id = student_school.student_id WHERE student_school.school_id = " . $school_id;
        $resultset = mysqli_query($connection, $sql);

        return $resultset;
    }
}

?>