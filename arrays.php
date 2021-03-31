<?php
#Arrays
/*
    -Indexed 
    -Associative
    -Multi-Dimensional
*/


//Indexed 
$people = array('Doogie', 'Kev Kev', 'Sarahhh');
$ids = array(22,44,534);
$cars = ['honda', 'toyota', 'vroomachine']; //different way to create an array in PHP
$cars[3] = 'potato';
//Empty brackets will just load value on the end...
$cars[]="jello";

//How many in the array?
// echo count($cars);

//Print the array? 
// print_r($cars);

//Data type in array 
// var_dump($cars);

// echo $people[2]


// echo $cars[4];

//Associative Arrays

// $people2 = array('Brad'=> 35, 'Jenny'=> 44, 'Grandma' => 28);
// echo $people2['Jenny']


//Multi Dimensional Arrays
$carz = array(
    array('Honda', 20, 10),
    array('Ford', 20, 12),
    array('Chevy', 21, 05),
);

echo $carz[0][2];

?>