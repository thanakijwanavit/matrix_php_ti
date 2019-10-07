<?php
$filename = $_REQUEST['filename'];
$uploaddir = "/usr/share/matrix-gui-2.0/dlp_spect_data/";
unlink($uploaddir . $filename);
?> 

