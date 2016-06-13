<?php
	require_once __DIR__.'/config.php';
        require_once __DIR__.'/leapinfo.php';
        $jsont = array(
                "id" => "$domain",
                "it" => str_replace('_','.',reset(array_flip($_GET))),
                "st" => round(microtime(true),3),
                "leap" => $leap,
                "next" => $next,
                "step" => $step,
        );
        $jsont['it'] = floatval($jsont["it"]);
?>
