<?php
$serverName = "localhost";       
$dbUserName = "root";
$dbPassword = "";
$dbName = "scanning-system";
$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);
if (!$conn) {
    die("Błąd łączenia z bazą danych: " . mysqli_connect_error());
}
