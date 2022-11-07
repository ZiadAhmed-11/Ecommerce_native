<?php
namespace app\database\config\models;

use app\database\config\Connection;
include "../../../vendor/autoload.php";

class model extends Connection{
    const TABLE="";
    public static function all()
    {
        $query="SELECT * FROM" . static::TABLE; 
        echo $query;
    }
}