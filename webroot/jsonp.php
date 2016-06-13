<?php
	header("Content-Type: application/javascript");
	header("Access-Control-Allow-Origin: *");
	require_once __DIR__.'/../lib/jsont.php';	
?>
jsont( <?php
	$time = str_replace('   ','',json_encode($jsont,JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_PRETTY_PRINT));
	echo str_replace('"it": 0,','"it": 0.000,', $time);
?> )
