<?php
// Example 2 curl_getinfo() example with option parameter

// create a cURL handle
$ch = curl_init('http://www.example.com');

// Execute
curl_exec($ch);

// Check HTTP status codee
if(!curl_errno($ch)) {
    switch($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
        case 200:   # OK
            break;
        default:
            echo 'Unexpected HTTP code: ', $http_code, "\n";
    }
}

// close handle
curl_close($ch);
?>