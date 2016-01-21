<?php
/**
 * Created by PhpStorm.
 * User: sranga
 * Date: 1/21/16
 * Time: 9:44 AM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/model/Location.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/databaseproject/php/Connection.php";
include_once($path);


use Model\Connection;
use Model\Location;

class LocationController {

    function addLocations(Location $location, $child_id){

        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        for ($i = 0; $i<5; $i++ ){

            $year = $location->getYear();
            $grama_div = $location->getGramaDiv();
            $polling_div = $location->getPollingDiv();
            $polling_district =$location->getPollingDistrict();
            $confirm = 0;

            $stmt = $connection->prepare("INSERT INTO location_duration_info (year, grama_div, polling_div , polling_district, confirm, child_id) VALUES (?,?,?,?,?,?)" );
            $stmt->bind_param("ssssii", $year, $grama_div, $polling_div, $polling_district, $confirm, $child_id);
            $result = $stmt->execute();
            $stmt->close();
        }
    }
} 