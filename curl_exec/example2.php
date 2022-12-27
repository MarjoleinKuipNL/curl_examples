<?php
// fictuional URL to an existing file with nog data in it (ie. 0 byte file)
$url = 'http://www.example.com/empty_file.txt';
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);

// execute and return string(this should be an empty string '')
$str = curl_exec($curl);

curl_close($curl);

// the value of $str is actually bool(true), not empty string ''
var_dump($str);

?>