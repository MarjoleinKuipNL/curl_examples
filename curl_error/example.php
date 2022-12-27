<?php
// create a curl handle to a non-existing location
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
if(curl_exec($ch) === false){
    echo 'Curl error: ' . curl_error($ch);
}else {
    echo 'Operation completed without any errors';
}

// close handle
curl_close($ch);
?>