<?php
header('Access-Control-Allow-Origin: *');
$ep = round(microtime(true),3);
$sy = 2208988800;
echo $ep + $sy;
