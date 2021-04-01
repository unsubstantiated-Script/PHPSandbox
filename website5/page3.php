<?php
//make the array
$user = ['name' => 'Justo', 'email' => 'justo@gmail.com', 'age' => 35];

//get it ready for storage

$user = serialize($user);

setcookie('user', $user, time() + 3600);

$user = unserialize($_COOKIE['user']);

echo $user['email'];