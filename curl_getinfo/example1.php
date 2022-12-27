<?php
// create a cURL hancle
$ch = curl_init("http://www.example.com");

// execute
curl_exec($ch);

// Check if any error occurred
if(!curl_errno($ch)){
    $info = curl_getinfo($ch);
    echo "Took ", $info['total_time'], ' seconds to send a request to ', $info['url'], "\n";
}

// close handle
curl_close($ch);
?>