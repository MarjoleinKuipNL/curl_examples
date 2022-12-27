<?php
// before curl_exec

    // this will produce a curl log
    curl_setopt($curl, CURLOPT_VERBOSE, true);
    curl_setopt($curl, CURLOPT_STDERR, fopen('/your/writable/app/logdir/curl.log', 'a+')); // a+ to append...
?>
<?php
// after curl_exec, but before curl_close

// this will extract the timing information
extract(curl_getinfo($curl)); // create metrics variables from getinfo
$appconnect_time = curl_getinfo($curl, CURLINFO_APPCONNECT_TIME); // request this time explicitly
$downloadduration = number_format($total_time - $starttransfer_time, 9); // format to get rif of scientific notation
$namelookup_time = number_format($namelookup_time, 9);
$metrics = "CURL...: $url TIME...: $total_time DNS: $namelookup_time Connect: $connect_time SSL/SSH:
$appconnect_time PreTransfer: $pretransfer_time StartTransfer: $starttransfer_time Download: $downloadduration";
error_log($metrics); // write to php-fpm default www-error.log, or append it to same log as above with
file_put_contents('<filename>', $metrics, FILE_APPEND);
?>
