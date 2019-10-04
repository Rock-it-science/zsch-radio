<?php
date_default_timezone_set('PST');
$jsonfile = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Kelowna&units=metric&appid=d935043beae3f8840734f335cfa43026");
$jsondata = json_decode($jsonfile);
$maind = $jsondata->weather[0]->main;
$hour = date('H');
echo $maind . ", " . $hour;
?>
