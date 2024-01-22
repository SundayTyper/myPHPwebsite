
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Speak Friend And Enter<br></h1>
        <form action= "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post";>
            <input type="text" name="password"> <br>
            <br>
            <input type="submit" name="submit" value="Enter">
        </form>
    </center>
</body>
</html>