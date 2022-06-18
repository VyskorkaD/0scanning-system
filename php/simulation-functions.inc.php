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

function checkDay ($day) {
    $date1 = strtotime($day);
    $date = date("l", $date1);
    if($date === "Monday" || $date === "Tuesday" || $date === "Wednesday" || $date === "Thursday" || $date === "Friday") {
        return "working";
    }
    else if($date === "Saturday") {
        return "saturday";
    }
    else {
        return "sunday";
    }
}

function generateNumber($dayQuantity, $typeOfDay) {
    $numberOfPassengers = 0;
    for ($j = 0; $j < $dayQuantity; $j++) {
        for ($i = 0; $i < 24; $i++) {
            $numberOfPassengers += checkTime($i);
        }
    }
    if($typeOfDay === "working") {
        $numberOfPassengers *= WORKING_DAYS;
    }
    else if($typeOfDay === 'saturday') {
        $numberOfPassengers *= SATURDAY;
    }
    else {
        $numberOfPassengers *= SUNDAY;
    }
    return round($numberOfPassengers);
}

function generateBusID() {
    return mt_rand(1, 72);
}

function createDayliRaport($conn, $busId, $day, $scanQuantity) {
    $sql = "INSERT INTO dayliraports (busID, day, scanQuantity)
            VALUES ($busId, \"$day\", $scanQuantity);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    var_dump($stmt);
    var_dump($sql);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../simulate-dayli.php");
    exit();
}
