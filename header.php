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
        <link rel="stylesheet" href="style/raports.css">
        <link rel="stylesheet" href="style/profile.css">
        <title></title>

    </head>
    <body>
        <nav id="navbar">
            <ul>
                <li><a class="" href="contact.php">Kontakt</a></li>
                <?php
                if (isset($_SESSION["userName"])) {
                    echo "<li><a class='' href='php/logout.inc.php'>Wyloguj się</a></li>";
                    echo "<li><a class='' href='raports.php'>Raporty dzienne</a></li>";
                    echo "<li><a class='' href='profile.php'>Moje konto</a></li>";
                }
                else {
                    echo "<li><a class='' href='login.php'>Logowanie</a></li>";
                    echo "<li><a class='' href='signup.php'>Rejestracja</a></li>";
                }
                ?>

                <li><a class="" href="about.php">O aplikacji</a></li>
            </ul>
        </nav>
        <script src="js/active.js"></script>
