<?php
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

?>
<!-- mySQL to create table -->
<!-- CREATE TABLE `php-app`.`passwords` (`user` VARCHAR(25) NOT NULL , `password` VARCHAR(255) NOT NULL , `time_visited` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;  -->
