<?php
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
