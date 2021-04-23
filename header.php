<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/navbar.css">
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/about.css">
        <link rel="stylesheet" href="style/login.css">
        <link rel="stylesheet" href="style/signup.css">
        <title></title>

    </head>
    <body>
        <nav id="navbar">
            <ul>
                <li><a class="" href="contact.php">Contact</a></li>
                <?php
                if (isset($_SESSION["userName"])) {
                    echo "<li><a class='' href='profile.php'>Profile</a></li>";
                    echo "<li><a class='' href='php/logout.inc.php'>Log out</a></li>";
                }
                else {
                    echo "<li><a class='' href='login.php'>Log in</a></li>";
                    echo "<li><a class='' href='signup.php'>Sign In</a></li>";
                }
                ?>

                <li><a class="" href="about.php">About</a></li>
            </ul>
        </nav>
        <script src="js/active.js"></script>
