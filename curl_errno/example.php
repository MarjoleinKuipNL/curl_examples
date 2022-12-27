<?php
// create a curl handle to a non-existing location
$ch = curl_init("http://404.php.net/");

// Execute
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

// check if any error occurred
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

//close hancle
curl_close($ch);
?>