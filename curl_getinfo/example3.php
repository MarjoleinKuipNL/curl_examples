<?php
$ch = curl_init(); // create cURL handle (ch)
if(!$ch){
    die("Couldn't initialize a cURL handle");
}
// set some cURL options 
$ret = curl_setopt($ch,     CURLOPT_URL,            "http://mail.yahoo.com");
$ret = curl_setopt($ch,     CURLOPT_HEADER,         1);    
$ret = curl_setopt($ch,     CURLOPT_FOLLOWLOCATION, 1);
$ret = curl_setopt($ch,     CURLOPT_RETURNTRANSFER, 0);
$ret = curl_setopt($ch,     CURLOPT_TIMEOUT,        30);

// execute
$ret = curl_exec($ch);
if(empty($ret)){
    // some kind of an error happened
    die(curl_error($ch))
}else {
    $info = curl_getinfo($ch);
    curl_close($ch); // close cURL handler

    if(empty($info['http_code'])){
        die("No HTTP code was returned.");
    }

}
    
?>