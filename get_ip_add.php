<?php
$flag = $_REQUEST['flag'];
	if($flag)
		exec("/sbin/ifup eth0");

	exec("/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d':' -f2 | cut -d' ' -f1" ,$output,$return);
	echo (json_encode($output));
	
?>
