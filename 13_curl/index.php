<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
// $resource = curl_init($url);
// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
// $usersJSON = curl_exec($resource);
// echo $usersJSON;
// curl_close($resource);
// Get response status code

// set_opt_array

// Post request

$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'rakesh@exaple.com'
];

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('content-Type:application/json')
]);
$result = curl_exec($ch);
curl_close($ch);
var_dump($result);
