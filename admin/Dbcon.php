<?php

class Dbcon
{
    public $conn;
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'ced_hosting');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            // echo 'connected';
        }
    }
}
$db = new Dbcon();