<?php

$weather_comma_time = $_REQUEST["wt"];
$weather_time = explode(", ", $weather_comma_time);
$weather = $weather_time[0];
$time = $weather_time[1];

// 2D array of playlist title and ID
$lists = array(
  array("cloudy afternoon", "PLcv1X7I5MHhZAWL3S8MujNuoe8FOpa0RP"),
  array("snowy", "PLcv1X7I5MHhYvXioGp8nW_IJYJJNK4zbq"),
  array("dark and rainy", "PLcv1X7I5MHhb_Tec17wug8uzp-DYeL-KD"),
  array("morning", "PLcv1X7I5MHhY7r3rQXm_PSPG6vdiTasrt"),
  array("back-catalog", "PLcv1X7I5MHhYvXioGp8nW_IJYJJNK4zbq")
);

// Decide which playlist to play
if($time > 5 && $time <12){ //Morning
  $selectedID = $lists[3][1];
} else if((strpos($weather, 'cloud') !== false) && time > 12 && time < 18){ // Cloudy Afternoon
  $selectedID = $lists[0][1];
} else if(strpos($weather, 'snow') !== false){ ///Snow
  $selectedID = $lists[1][1];
} else if((strpos($weather, 'rain') !== false) && time > 18){ // Dark and rainy
  $selectedID = $lists[2][1];
} else{ // Back Catalog
  $selectedID = $lists[4][1];
}

// Assemble and echo selected playlist URL
$url = "https://youtube.com/embed/videoseries?list=".$selectedID."&autoplay=1";
echo $url;
 ?>
