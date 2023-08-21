<?php
header("Access-Control-Allow-Origin: *");
$fp = fopen('chce.txt', 'c');
fwrite($fp, 'j');
fclose($fp);
echo '<meta http-equiv="refresh" content="0; url=https://www.alik.cz/k/roboti-koutek/" />';