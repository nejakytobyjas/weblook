<?php
header("Access-Control-Allow-Origin: *");
echo file_get_contents('data.txt');
$fp = fopen('data.txt', 'c');
fwrite($fp, 'n');
fclose($fp);
