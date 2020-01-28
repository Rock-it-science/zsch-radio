<?php
require_once 'config.php';
$toBeRestored = file_get_contents($data_file);
$data = unserialize($toBeRestored);

$nowPlayingTitle = '';

echo $data['artist']. ' - ' . $data['title'];
?>
