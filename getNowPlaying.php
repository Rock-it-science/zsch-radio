<?php
require_once 'config.php';
$toBeRestored = file_get_contents($data_file);
$data = unserialize($toBeRestored);

echo $data["artist"] . " - " . $data["title"] . "<br />" . $data["album"] . ")";
?>
