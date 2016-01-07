<?php
include 'mysql_connector.php';

function getSchools(){
$con=getConnection();
$query="SELECT school_id,name,district FROM school";
$schools = mysqli_query($con,$query);
echo $schools;
return $schools;
}

