<?php
function uploadFile($name, $i=0){
    $postField = array();
    $tmpfile = $_FILES[$name]['tmp_name'][$i];
    $filename = basename($_FILES[$name]['name'][$i]);
    $postField['files'] = curl_file_create($tmpfile, $_FILES[$name]['type'][$i], $filename);
    $headers = array("Content-type" => "multipart/form-data");
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'Put here curl API');

    curl_setopt($curl_handle, CURLOPT_HEADER, $headers);
    curl_setopt($curl_handle, CURLOPT_POST, TRUE);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $postField);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $returned_fileName = curl_exec($curl_handle);
    curl_close($curl_handle);
    return json_decode($returned_fileName);
}
?>