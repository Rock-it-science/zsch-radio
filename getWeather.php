<?php
$lat = $_REQUEST["lat"];
$long = $_REQUEST["long"];
date_default_timezone_set('PST'); //TODO make this change wiht coordinates too
$jsonfile = file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=".$lat."&long=".$long."&units=metric&appid=d935043beae3f8840734f335cfa43026");
$jsondata = json_decode($jsonfile);
$maind = $jsondata->weather[0]->main;
$hour = date('H');
echo $maind . ", " . $hour;
?>
