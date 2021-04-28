<?php
function checkTime($time) {                 //return the number of passangers depends on time
    $numOfPassengers;
    if ($time >= 0 && $time < 6) {
        $numOfPassengers = rand(20, 40);
    }
    else if ($time >= 6 && $time < 9) {
        $numOfPassengers = rand(150, 500);
    }
    else if ($time >= 9 && $time < 15) {
        $numOfPassengers = rand(80, 400);
    }
    else if ($time >= 15 && $time < 18) {
        $numOfPassengers = rand(130, 460);
    }
    else if ($time >= 18 && $time <= 23) {
        $numOfPassengers = rand(80, 130);
    }
    else {
        echo "Scanning error: generating number.";
        exit();
    }
    return $numOfPassengers;
}

function generateDayliNumber() {                        // generate dayli number of passangers 
    $dayliNumber = 0;
    for ($i = 0; $i < 24; $i++) {
        $dayliNumber = $dayliNumber + checkTime($i);
    }
    return $dayliNumber;
}

$dayliNumberOfPassengers = generateDayliNumber();
//echo $dayliNumberOfPassengers;
