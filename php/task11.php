<?php
$encodedData = json_encode(array( "showpassword"=>"no", "bgcolor"=>"#ffffff"));
$cookieString = base64_decode(urldecode("MGw7JCQ5OC04PT8jOSpqdmkgJ25nbCorKCEkIzlscm5oKC4qLSgubjY%3D"));
function xor_encrypt($in,$sentKey) {
    $key = $sentKey;
    $text = $in;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}
$result = xor_encrypt($cookieString,$encodedData);
echo "result is:\n";
echo $result;
echo "\n";
$result2 = xor_encrypt($cookieString,"KNHL");
echo "result2 is:\n";
echo $result2;
echo "\n";
$correctObjectToDecode = json_encode(array( "showpassword"=>"yes", "bgcolor"=>"#ffffff"));
$result3 = urlencode(base64_encode(xor_encrypt($correctObjectToDecode,"KNHL")));
echo "result3 is:\n";
echo $result3;
echo "\n";
?>

