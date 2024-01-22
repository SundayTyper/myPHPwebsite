<?php

function connect_to_db()
{
    
    $host = "db";
    $db = "php-app";
    $user = "USER";
    $pass = "PASS";

    try{
        $conn = mysqli_connect($host, $user, $pass, $db);
    }
    catch(mysqli_sql_exception){
        echo "Connection error";
    }

    return $conn;
}
?>