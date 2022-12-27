<?php
// get an error description from the cURL handl ($ch) using curl_error:
$description = curl_error($ch);

// get a description form the error number itself using curl_strerror(): 
    $descriptionErrorNumber = curl_strerror(curl_errorno($ch));