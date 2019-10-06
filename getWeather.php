<?php
//Get coordinates passed from DOM
$lat = $_REQUEST["lat"];
$long = $_REQUEST["long"];

//Get timezone from coordinates
$tzRequest = file_get_contents("https://maps.googleapis.com/maps/api/timezone/json?location=".$lat.",".$long."&timestamp=".time()."&key=AIzaSyCgrdNnFg9NT18fRHs6wlFKdFlXoGHm7Tg");
$tzJson = json_decode($tzRequest);
date_default_timezone_set($tzJson->timeZoneId);

//Get time
$hour = date('H');

//Get weather from coordinates
$weatherFile = file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$long."&units=metric&appid=d935043beae3f8840734f335cfa43026");
$weatherJson = json_decode($weatherFile);
$maind = $weatherJson->weather[0]->main;

//echo weather and time
echo $maind . ", " . $hour;
?>
