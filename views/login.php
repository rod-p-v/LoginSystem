<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Sessions</title>
</head>
<body>
    <form action="" method="POST">

    <?php

        if (isset($errorLogin)) {
            echo $errorLogin;
        }

    ?>
    
    <h2>Sign in</h2>
    <p>User name: <br>
    <input type="text" name="username"></p>
    <p>Password: <br>
    <input type="password" name="password"></p><br>
    <input type="submit" value="Log in">

    </form>
</body>
</html>