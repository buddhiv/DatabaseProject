<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/16/2016
 * Time: 1:07 AM
 */
function getAllPastPupilMethodInforChild($method_id){
    $link = getConnection();

    $sql = "SELECT TIMESTAMPDIFF(year,student_school.registered_date,student_school.leaving_date) AS num_of_years_studied ,COUNT(non_acadamic.non_acadamic_id) AS count_non_acadamic,acadamic.ordinary_level,acadamic.advanced_level,past_pupil_method.confirm FROM past_pupil_method,acadamic,non_acadamic,student_school,student,achievement WHERE student.student_id=past_pupil_method.student_id AND student_school.student_id=student.student_id AND achievement.student_id=student_school.student_id AND acadamic.achievement_id=achievement.achievement_id AND non_acadamic.achievement_id=achievement.achievement_id AND past_pupil_method.method_id='" . $method_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}