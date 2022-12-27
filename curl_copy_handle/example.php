<?php

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, 'http://www.example.com');
curl_setopt($ch, CURL_OPT_HEADER, 0);

// copy the hancle
$ch2 = curl_copy_handle($ch);

// grab URL (http://example.com/) and pass it through the browser
curl_exec($ch2);

// close cURL resources, and free up system resources
curl_close($ch2);
curl_close($ch);

?>