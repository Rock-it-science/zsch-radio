<?php
require_once 'config.php';
$toBeRestored = file_get_contents($data_file);
$data = unserialize($toBeRestored);

echo "Artst: " . $data["artist"] . "<br>Title: " . $data["title"] . "<br>Album: " . $data["album"];
?>
