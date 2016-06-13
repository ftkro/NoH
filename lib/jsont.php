<?php
        require_once __DIR__.'/leapinfo.php';
        $jsont = array(
                "id" => "ntp.jre655.com",
                "it" => str_replace('_','.',reset(array_flip($_GET))),
                "st" => round(microtime(true),3),
                "leap" => $leap,
                "next" => $next,
                "step" => $step,
        );
        $jsont['it'] = floatval($jsont["it"]);
?>
