<?php
$queryFinal = ("                                                         'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
$url = "http://natas28.natas.labs.overthewire.org/index.php";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas28:skrwxciAe6Dnb0VfFDzDEHcCzQmv3Gd4");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_POSTFIELDS, "query=".$queryFinal);
$output = curl_exec($ch);
curl_close($ch);
$finalUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
$retData = explode("search.php/?query=",$finalUrl);
$currentStr = $retData[1];
$currentStr = urldecode($currentStr);
$splited = str_split($currentStr,64);
for ($h=0; $h < count($splited); $h++) { 
    echo($splited[$h]);
    echo("\n");
}

?>