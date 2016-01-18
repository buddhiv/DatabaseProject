<?php

/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/18/2016
 * Time: 5:18 PM
 */

include_once '../php/controller/SchoolController.php';

$schoolController = new \Controllers\SchoolController();

if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $school_id = $_GET['id'];

    $resultset = $schoolController->getSchoolById($school_id);
    $school = mysqli_fetch_assoc($resultset);

    $new_row = '<tr>
<td>2</td>
<td>' . $school['name'] . '</td>
<td>' . $school['category'] . '</td>
<td><input type="text" name="distance" class=""> km</td>
</tr>';

    $td = explode('</table>', $data);

    echo $td[0] . $new_row . "</table>";
}