<?php

function prev_explorers($conn)
{
    $get_req = "SELECT user, time_visited FROM passwords";
    $previous_explorers = mysqli_query($conn, $get_req);

    while($hero = mysqli_fetch_row($previous_explorers)){
        echo $hero[0] . " was here at: " . $hero[1] . "<br>";
    }
}

?>
