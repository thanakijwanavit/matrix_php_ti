<?php
$return=1;
$count=0;
while($return && $count<200)
{
	exec("/usr/share/matrix-gui-2.0/scan.sh",$output,$return);
	$count++;
}
?>
