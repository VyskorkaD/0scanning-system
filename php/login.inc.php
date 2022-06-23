<?php

if (isset($_POST["submit"])) {
    $username = $_POST["user_username"];
    $password = $_POST["user_password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogIn($username, $password) !== false) {       //info in signup.inc.php
       header("location: ../login.php?error=emptyinput");
       exit();
    }

    loginUser($conn, $username, $password);
}
else {
    header("location: ../login.php");
    exit();
}
