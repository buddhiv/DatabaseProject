<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/8/2016
 * Time: 2:11 PM
 */
include 'PresentPupil.php';
$check = new PresentPupil(3,3,1,null);
$marks = $check->getFullMarks();
echo $marks;