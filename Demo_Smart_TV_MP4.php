<?php

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

/*
 Regex Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$GET_URL = file_get_contents('https://paidcodes.albdroid.al/Vimeo_Apis/Smart_TV_MP4.php'.$_SERVER['QUERY_STRING']);
echo $GET_URL;
?>