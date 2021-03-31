<?php
// echo date('d');

//Setting time by time zone
// date_default_timezone_set('America/Los_Angeles');

// echo date('h:i:sa');

//Unix timestamp is the number of seconds that has passed since Unix Epoch Jan 1, 1970 00:00:00
// $timestamp = mktime(5, 55, 05, 10, 07, 1980);

// echo date('m/d/Y h:i:sa', $timestamp);

//String to timestamp...

$timestamp2 = strtotime('7:00pm March 26 2019');

echo "$timestamp2 <br>";

//Convert the stamp back to string
echo date('m/d/Y h:i:sa', $timestamp2);
