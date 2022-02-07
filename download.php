<?php 

$file = $_GET['file'].".pdf" ;

// print_r($file);
// die('gggggggggg');
header("content-disposition: attachment; filename=".urlencode($file));

$fb = fopen($file, "r");

while (!feof($fb)) {
	echo fread($fb, 8192);
	flush();
}






?>