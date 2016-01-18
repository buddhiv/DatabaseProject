<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/16/2016
 * Time: 5:24 PM
 */
function getAllPresentPupilMethodInforChild($method_id){
    $link = getConnection();

    $sql = "SELECT TIMESTAMPDIFF(year,student_school.registered_date,CURRENT_DATE()) AS num_of_years_studied ,COUNT(achievement.achievement_id) AS count_achievement,present_pupil_method.confirm FROM present_pupil_method,student_school,student,achievement WHERE student.student_id=present_pupil_method.student_id AND student_school.student_id=student.student_id AND achievement.student_id=student_school.student_id AND present_pupil_method.method_id='" . $method_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}