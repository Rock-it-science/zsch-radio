<?php

$weather_comma_time = $_REQUEST["wt"];
$weather_time = explode(", ", $weather_comma_time);
$weather = strtolower($weather_time[0]);
$time = $weather_time[1];

// 2D array of playlist title and ID
$lists = array(
  array("cloudy afternoon", "PLcv1X7I5MHhZAWL3S8MujNuoe8FOpa0RP"),
  array("snowy", "PLcv1X7I5MHhYvXioGp8nW_IJYJJNK4zbq"),
  array("dark and rainy", "PLcv1X7I5MHhb_Tec17wug8uzp-DYeL-KD"),
  array("morning", "PLcv1X7I5MHhY7r3rQXm_PSPG6vdiTasrt"),
  array("zsch radio default", "PLcv1X7I5MHhZejsywOTK6i0LS5HP1u2Ps")
);

// Decide which playlist to play
$selected = array();
if($time > 5 && $time <12){ //Morning
  $selected = $lists[3];
} else if((strpos($weather, 'cloud') !== false) && $time < 18 && $time > 12){ // Cloudy Afternoon
  $selected = $lists[0];
} else if(strpos($weather, 'snow') !== false){ ///Snow
  $selected = $lists[1];
} else if((strpos($weather, 'rain') !== false) && time > 18){ // Dark and rainy
  $selected = $lists[2];
} else{ // Back Catalog
  $selected = $lists[4];
}

// Assemble and echo selected playlist URL
$url = $selected[0] . ",https://youtube.com/embed/videoseries?list=".$selected[1]."&autoplay=1";
echo $url;
 ?>
