<?php
$filename = $_REQUEST['filename'];
$savetofile = $_REQUEST['savetofile'];
$flag = $_REQUEST['flag'];
$uploaddir = "/usr/share/matrix-gui-2.0/";
copy($uploaddir . $filename,$uploaddir . $savetofile);
if($flag==1)
{
	$fh = fopen('defaultParameters.txt','r') or die("Cannot open parameters file!");
	$settings = fread($fh,filesize('defaultParameters.txt'));
	$ourFileHandle = fopen($uploaddir . $savetofile, 'a') or die("can't open file");
	fwrite($ourFileHandle,$settings);
	fclose($ourFileHandle);
}
?> 

