<?php

$weather_comma_time = $_REQUEST["wt"];
$weather_time = explode(", ", $weather_comma_time);
$weather = $weather_time[0];
$time = $weather_time[1];

# 2D array of playlist title and ID
$lists = array(
  array("rainy", ),
  array("sunny", ),
  array("cloudy", ),
  array("clear night", ),
  array("rainy night", ),
);


# Assemble and echo selected playlist URL
$url = "https://youtube.com/embed/videoseries?list=".$selectedID."&autoplay=1";
echo $url;
 ?>
