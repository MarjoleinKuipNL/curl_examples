<?php

try{

    $params = array(
        'url' => 'http://www.google.com', 
        'host' => '',
        'header' => '', 
        'method' => 'GET', // 'POST', 'HEAD'
        'referer' => '', 
        'cookie' => '',
        'post_fields' => '',  // 'var1=value&var2=value'
        'timeout' => 20,
    );
    $this->curl->init($params);
    $result = $this->curl->exec();
    if($result['curl_error']) throw new Exception($result[curl_error]);
    if($result['http_code']!= '200') throw new Exception("HTTP Code = ".$result['http_code']);
    if(!$result['body']) throw new Exception("Body of file is empty");
}catch (Exception $exception){
    echo $exception->getMessage();
}