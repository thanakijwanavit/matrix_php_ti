<?php
$type = $_REQUEST['type'];
//$dir = "temp/"; // folder, e.g.: 'images/', same dir as script use a '.'
$ourFileName = $_REQUEST['filename'];
$dir = $_REQUEST['dir'];
$myDirectory = opendir($dir);
while($entryName = readdir($myDirectory)) { $dirArray[] = $entryName; } // get files
closedir($myDirectory); // close directory

sort($dirArray); // sort 'em
$indexCount	= count($dirArray); // count elements in array


$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");

// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
	if (substr("$dirArray[$index]", 0, 1) != ".") { // don't list hidden files
		if (strstr("$dirArray[$index]", ".")==$type) { // get files of specified type
			fwrite($ourFileHandle,$dirArray[$index]."\n");
}}}
fclose($ourFileHandle);

$filedata = file_get_contents($ourFileName);
echo (json_encode($filedata));
?>
