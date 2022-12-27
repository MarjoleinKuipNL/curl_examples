<?php
// create a curl handle
$ch = curl_init();

// Escape a string used as a GET parameter
$location = curl_escape($ch, 'Hofbräuhaus / München');
// result: Hofbr%C3%A4uhaus%20%2F%20M%C3%Bcnchen

// compose an URL with the escaped string
$url = "http://example.com/add_location.php?location={$location}";
// result : http://example.com/add_location.php?location=Hofbr%C3%A4uhaus%20%2F%20M%C3%Bcnchen

// Send HTTP request and close the handle
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);
?>