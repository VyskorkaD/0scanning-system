<?php

if(isset($_POST["submit"])) {
    $day = $_POST["typeOfDay"];

    require_once 'dbh.inc.php';
    require_once 'simulation-functions.inc.php';

    $busId = generateBusId();
    $day = generateDate();
    $numOfPassengersIn = generateNumber(1, $day);
    $numOfPassengersOut = $numOfPassengersIn;

    createDayliRaport($conn, $busId, $day, $numOfPassengersIn, $numOfPassengersOut);
}
else {
    header("location: ../raports.php");
    exit();
}
