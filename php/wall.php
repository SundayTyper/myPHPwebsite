<?php
    session_start();
if(!$_SESSION["auth"]) {
    header("Location: index.php");
}
    require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Congratulations!<br></h1> 
    You've made it to the hall of explorers! <br>
    Below is a list of all others who have made it this far... <br><br>

    <?php
        $get_req = "SELECT user, time_visited FROM passwords";
        $previous_explorers = mysqli_query($conn, $get_req);

    while($hero = mysqli_fetch_row($previous_explorers)){
        echo $hero[0] . " was here at: " . $hero[1] . "<br>";
    }
    ?>

    <br> Enter your name and set a password for easier access on Taco Tuesdays: <br>

    <form action= "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post";>
        Your name, wanderer? <br>
        <input type="text" name="name"><br>

        Your password, friend? <br>
        <input type="text" name="password"><br>

        <input type="submit" name="submit" value="Commit">
    </form>

</body>
</html>

<!-- Add new name to the wall -->
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $new_password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($name)) {
        echo "Please enter your name <br>";
    }
    elseif(empty($new_password)) {
        echo "Please enter your password <br>";
    }
    else{
        $hash = password_hash($new_password, PASSWORD_DEFAULT);
        $req = "INSERT INTO passwords (user, password_hash)
                    VALUES('$name', '$hash')";
        mysqli_query($conn, $req);
        session_destroy();
        ?> <script> window.location.href="index.php" </script> <?php
    }
}
?>

<!-- Close connection -->
<?php
    mysqli_close($conn);
?>
