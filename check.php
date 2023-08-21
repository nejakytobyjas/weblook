<?php
header("Access-Control-Allow-Origin: https://www.alik.cz");
echo file_get_contents('chce.txt');
$fp = fopen('chce.txt', 'c');
fwrite($fp, 'n');
fclose($fp);