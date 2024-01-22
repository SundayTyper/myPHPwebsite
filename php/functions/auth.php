<?php

require "functions/routing.php";

function authorize_login($password, $conn)
{
    // get passwords
    $get_password_req = "SELECT password_hash FROM passwords";
    $sqli_obj = mysqli_query($conn, $get_password_req);
    
    // loop to check against existing, hashed passwords
    while($existing_password = mysqli_fetch_row($sqli_obj)){
        if(password_verify($password, $existing_password[0])) {
            $_SESSION["auth"] = true;
            go_to_page("wall.php");
        }
        else {
            go_to_page("index.php");
        }
    }
}

?>
