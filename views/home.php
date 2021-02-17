<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="logOut">
                <a href="logout.php"></a>Log out</li>
        </ul>
    </div>

    <section>
        <h1>Welcome <?php echo $user->getName(); ?></h1>
    </section>
</body>
</html>