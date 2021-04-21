<?php
$serverName = "localhost";       //name of the server
$dbUserName = "root";       //database user name
$dbPassword = "";            //database password
$dbName = "scanning-system";                 //name of the database

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die("Connection to DB failed: " . mysqli_connect_error());

}
