<?php

$timestamp=$_SERVER['REQUEST_TIME'];
$dt = date("Y-m-d H:i:s",$timestamp);
$page=$_SERVER['REQUEST_URI'];
$browser=$_SERVER['HTTP_USER_AGENT'];
$user_ip=$_SERVER['REMOTE_ADDR'];
$logLine=implode(" | ",array($dt,$page,$browser,$user_ip));
$logFile=fopen("logs/my-website.log","a+");
fwrite($logFile,$logLine."\n");
fclose($logFile);
?>