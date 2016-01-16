<?php

/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/16/16
 * Time: 6:58 PM
 */
class Connection
{
    private static $instance;
    private $db_host = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "grade_one";

    private function __construct()
    {
        self::$instance = mysqli_connect($this->db_host, $this->db_name, $this->db_password, $this->db_name);
    }

    //!!! This method checks to see if the instance already exists, if exists this will be used, else the instance is created
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Connection();
        }

        return self::$instance;
    }
}

?>