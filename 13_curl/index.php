<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$usersJSON = curl_exec($resource);
echo $usersJSON;
curl_close($resource);
// Get response status code

// set_opt_array

// Post request