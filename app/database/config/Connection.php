<?php
namespace app\database\config;

use mysqli;

class Connection {
    private string $db_hostname="localhost";
    private string $db_username="root";
    private string $db_password='';
    private string $db_name="nti_ecommerce";
    protected mysqli $conn;

    public function __construct() {
       $this->conn=new mysqli($this->db_hostname,$this->db_username,$this->db_password,$this->db_name);
        // if($conn->connect_error)
        // {
        //     die("Connection failed" . $conn->connect_error);
        // }
        // echo "Connected successfully";
    }

    public function F__destract()
    {
        $this->conn->close();
    }
    
}

new connection;