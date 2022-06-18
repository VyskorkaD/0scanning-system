<?php
    $username = $_POST["user_username"];
    $name = $_POST["user_name"];
    $email = $_POST["user_email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    editUser($conn, $name, $email, $username);
