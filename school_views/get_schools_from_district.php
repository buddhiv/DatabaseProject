<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/19/2016
 * Time: 12:56 PM
 */
include_once "../php/Connection.php";
include_once '../php/controller/schoolController.php';

use \Controllers\SchoolController;
use \Model\Connection;

if (isset($_POST['schoolsfordistrict'])) {
    if ($_POST['schoolsfordistrict'] != "") {
        $link = getConnection();
        $sql = "SELECT * FROM school WHERE district = '" . $_POST['district'] . "'";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
    ?>

    <?php
}
?>
