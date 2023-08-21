<?php
header("Access-Control-Allow-Origin: *");
$fp = fopen('chce.txt', 'c');
fwrite($fp, 'j');
fclose($fp);
