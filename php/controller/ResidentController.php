<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/11/2016
 * Time: 6:26 PM
 */

if (file_exists('../mysql_connector.php')) {
    include '../mysql_connector.php';
}
function getAllResidenMethodInforChild($method_id){
    $link = getConnection();

    $sql = "SELECT resident_id,num_of_years_spent,ownership,num_of_closes_schools,confirm FROM resident_method WHERE method_id='" . $method_id . "'";
    $resultset = mysqli_query($link, $sql);
    mysqli_close($link);
    return $resultset;
}