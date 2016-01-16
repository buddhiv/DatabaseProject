<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/15/2016
 * Time: 7:05 PM
 */

function getAllStaffMethodInforChild($method_id){
    $link = getConnection();

    $sql = "SELECT distance_from_permanent_residence,,ownership,num_of_closes_schools,confirm FROM resident_method WHERE method_id='" . $method_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}