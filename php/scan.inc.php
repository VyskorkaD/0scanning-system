<?php
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


function generateRideNumber () {            //generate passenger number for ride
    $rideNumber = 0;
    $startTime = mt_rand(0, 23);
    if ($startTime <= 22) {
        $endTime = $startTime + 1;
    }
    elseif ($startTime === 23) {
        $endTime = 0;
    }
    $rideNumber += checkTime($startTime);
    $rideNumber += checkTime($endTime);
    return $rideNumber;
}


function generateNumber($days) {                        // generate daily number of passengers
    $numberOfPassengers = 0;
    for ($j = 0; $j < $days; $j++) {
        for ($i = 0; $i < 24; $i++) {
            $numberOfPassengers += checkTime($i);
        }
    }
    return $numberOfPassengers;
}


$rideNumberOfPassengers = generateRideNumber();
$dailyNumberOfPassengers = generateNumber(1);
$weeklyNumberOfPassengers = generateNumber(7);
$monthlyNumberOfPassengers = generateNumber(31);

echo "Liczba pasażerów za przejazd: " . $rideNumberOfPassengers . "<br>";
echo "Dzienna liczba pasażerów: " . $dailyNumberOfPassengers . "<br>";
echo "Tygodniowa liczba pasażerów: " . $weeklyNumberOfPassengers . "<br>";
echo "Miesięczna liczba pasażerów: " . $monthlyNumberOfPassengers;
