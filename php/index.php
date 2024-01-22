<?php

    session_start();
    require "functions/connection.php";
    require "functions/auth.php";

    $conn = connect_to_db();

    require "views/index.view.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    authorize_login($password, $conn);
    mysqli_close($conn);

}
?>

