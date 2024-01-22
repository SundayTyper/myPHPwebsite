<?php
    require "functions/prev_explorers.php";
    require "functions/connection.php";
    $conn = connect_to_db();
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
    <ul>
    <?php  prev_explorers($conn); ?>
    </ul>
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
