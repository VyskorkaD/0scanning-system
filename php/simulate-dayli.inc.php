<?php

if(isset($_POST["submit"])) {
    $day = $_POST["date"];

    require_once 'dbh.inc.php';
    require_once 'simulation-functions.inc.php';

    $busId = generateBusId();
    $scanQuantity = generateNumber(1, checkDay($day));

    createDayliRaport($conn, $busId, $day, $scanQuantity);
}
else {
    header("location: ../raports.php");
    exit();
}
