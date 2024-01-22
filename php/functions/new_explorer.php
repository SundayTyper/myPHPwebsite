<?php

function new_explorer($conn, $name, $password)
{

    if(empty($name)) {
        echo "Please enter your name <br>";
        die();
    }
    elseif(empty($password)) {
        echo "Please enter your password <br>";
        die();
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $req = "INSERT INTO passwords (user, password_hash)
                    VALUES('$name', '$hash')";
        mysqli_query($conn, $req);
    }
}

?>
