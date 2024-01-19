<?php
    session_start();
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
    <h1>Speak Friend And Enter<br></h1>
    <form action= "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post";>
        <input type="text" name="password"> <br>
        <input type="submit" name="submit" value="Enter">
    </form>
</body>
</html>

<!-- if login correct, go to wall of success -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // get passwords
    $get_password_req = "SELECT password_hash FROM passwords";
    $sqli_obj = mysqli_query($conn, $get_password_req);
    
    // loop to check against existing, hashed passwords
    while($existing_password = mysqli_fetch_row($sqli_obj)){
        if(password_verify($password, $existing_password[0])) {
            $_SESSION["auth"] = true;
            ?> <script> window.location.href="wall.php" </script> <?php
        }
    }
}

?>


<!-- Close connection -->
<?php
    mysqli_close($conn);
?>
