<?php
	header('Content-Type: application/xml');
	header("Access-Control-Allow-Origin: *");
	require_once __DIR__.'/../lib/jsont.php';
?>
<?xml version="1.0" ?>
<timeinfo>
	<id>ntp.jre655.com</id>
	<it><?php echo htmlspecialchars(str_replace('0','0.000',$jsont['it']),ENT_QUOTES,'UTF-8'); ?></it>
	<st><?php echo round(microtime(true),3); ?></st>
	<leap><?php echo $jsont['leap']; ?></leap>
	<next><?php echo $jsont['next']; ?></next>
	<step><?php echo $jsont['step']; ?></step>
</timeinfo>
