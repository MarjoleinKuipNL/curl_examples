<?php
// to check for time out or error  -
if(!$responsexml || !is_string($responsexml) || !strlen($responsexml) || strpos($responsexml, 'upstream request timeout') !== false){
    return $this->sendRequest($request, $headers);
}
