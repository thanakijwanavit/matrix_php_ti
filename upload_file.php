<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  $uploaddir = '/home/root/uploads/';
  move_uploaded_file($_FILES["file"]["tmp_name"], $uploaddir . $_FILES["file"]["name"]);
  //echo "File Upload Complete";
  }
?> 

