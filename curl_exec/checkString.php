<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$xmlResponse = curl_exec($ch);
curl_close($ch);

if(!is_string($xmlResponse) || !strlen($xmlResponse)) {
    return $this->_set_error("Failure contacting server.");
} else {
    return $xmlResponse;
}