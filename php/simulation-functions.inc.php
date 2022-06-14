<?php

define("WORKING_DAYS", 1);
define("SATURDAY", 0.5844);
define("SUNDAY", 0.4088);

function checkTime($time) {                 //return the number of passengers depends on time
    if ($time >= 0 && $time < 6) {
        $numOfPassengers = mt_rand(20, 40);
    }
    else if ($time >= 6 && $time < 9) {
        $numOfPassengers = mt_rand(150, 500);
    }
    else if ($time >= 9 && $time < 15) {
        $numOfPassengers = mt_rand(80, 400);
    }
    else if ($time >= 15 && $time < 18) {
        $numOfPassengers = mt_rand(130, 460);
    }
    else if ($time >= 18 && $time <= 23) {
        $numOfPassengers = mt_rand(80, 130);
    }
    else {
        echo "Scanning error: generating number.";
        exit();
    }
    return $numOfPassengers;
}

function generateNumber($dayQuantity, $typeOfDay) {
    $numberOfPassengers = 0;
    for ($j = 0; $j < $dayQuantity; $j++) {
        for ($i = 0; $i < 24; $i++) {
            $numberOfPassengers += checkTime($i);
        }
    }
    if($typeOfDay === "Working") {
        $numberOfPassengers *= WORKING_DAYS;
    }
    else if($typeOfDay === 'Saturday') {
        $numberOfPassengers *= SATURDAY;
    }
    else{
        $numberOfPassengers *= SUNDAY;
    }
    return round($numberOfPassengers);
}

function generateBusID() {
    return mt_rand(1, 72);
}

function generateDate() {
    $year= mt_rand(2010, date("Y"));
    $month= mt_rand(1, 12);
    $day= mt_rand(1, 28);
    $randomDate = $year . "-" . $month . "-" . $day;
    return $randomDate;
}

function createDayliRaport($conn, $busId, $day, $numOfPassengersIn, $numOfPassengersOut) {
    $sql = "INSERT INTO raportsdayli (busID, day, numOfPassIn, numOfPassOut)
            VALUES ($busId, \"$day\", $numOfPassengersIn, $numOfPassengersOut);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    var_dump($stmt);
    var_dump($sql);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //header("location: ../simulate-dayli.php");
    //exit();
}
