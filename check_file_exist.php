<?php
$ourFileName = $_REQUEST['filename'];
echo (json_encode(file_exists($ourFileName)));
?>
