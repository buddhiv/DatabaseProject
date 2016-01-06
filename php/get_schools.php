<?php
include 'mysql_connector.php';
$con=getConnection();
function getSchools(){

$schools = mysql_query("SELECT school_id,name,district FROM school");
echo $schools;
return $schools;
}

