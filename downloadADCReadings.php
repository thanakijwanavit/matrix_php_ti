<?php
header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=readings.txt");
readfile("readings.txt");
?>

