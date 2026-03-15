<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Employee Registration</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/register.html">Register</a></li>
                <li><a href="pages/login.html">Login</a></li>
                <?php

                    if(isset($_SESSION['id'])){

                        echo '<li><a href="pages/user-board.php">YOU</a></li>';

                    }

                ?>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Project</h2>
    </main>
</body>

</html>