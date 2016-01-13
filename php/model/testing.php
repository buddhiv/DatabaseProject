<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/8/2016
 * Time: 2:11 PM
 */
include 'PastPupil.php';
$check = new PastPupil(5, 4, "FAIL", "PASS", 2, 0);
$marks = $check->getMarksFromAcadamicAchievement();
echo $marks;