<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");
if(!empty(reset(array_flip($_GET)))) {
	$fin = false;
	foreach(DateTimeZone::listIdentifiers() as $timezone) {
		if($timezone == reset(array_flip($_GET))) {
			date_default_timezone_set(reset(array_flip($_GET)));
			$fin = true;
			break;
		}
	}
	if(!$fin) {
		date_default_timezone_set('UTC');
	}
}
echo date('D M j H:i:s Y T');
?>
