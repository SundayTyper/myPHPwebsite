<?php
    session_start();
    require "functions/routing.php";

if(! $_SESSION["auth"]) {
    go_to_page("index.php");
}


    require "views/wall.view.php";

    require "functions/new_explorer.php";

// Add a new name to the wall
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $new_password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    new_explorer($conn, $name, $new_password);

    // teardown the session and connection
    mysqli_close($conn);
    session_destroy();
    go_to_page("index.php");
}
?>
