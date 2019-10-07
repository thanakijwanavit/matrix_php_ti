<?php
$filename = $_REQUEST['filename'];
$time = $_REQUEST['time'];
$uploaddir = "/usr/share/matrix-gui-2.0/";
/*
if($time!=0)
{
	$i=0;
	for($i=0;$i<4;$i++)
	{
		if(!file_exists($uploaddir . $filename))
			sleep($time);
		else
			break;
	}
}*/
$filedata = file_get_contents($uploaddir . $filename);
echo (json_encode($filedata));
?> 

