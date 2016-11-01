<?php
header('Content-Type: text/plain');
header('Expires: Thu, 01 Dec 1983 20:00:00 GMT');
header('Cache-Control: no-store');

echo 'OK';
$msg = date('c') . " {$_SERVER['REMOTE_ADDR']} [{$_GET['user']}] op:{$_GET['op']}\tspeed:{$_GET['speed']}\tlatency:{$_GET['avg']}\n";
file_put_contents("LOG.log",$msg,FILE_APPEND);