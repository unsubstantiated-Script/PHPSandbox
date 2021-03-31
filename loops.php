<?php
#Loops - Execute code sequentially

/*
For
While
Do..While
Foreach
 */

#For Loop
#@params - init, condition, inc

// for ($i = 0; $i < 10; $i++) {
//     echo 'Number ' . $i;
//     echo '<br>';
// };

// #While loop
// # @params - condition

// $i = 0;

// while ($i < 10) {
//     echo 'Number ' . $i;
//     echo '<br>';
//     $i++;
// }

// #Do...while

// $i = 0;

// do {
//     echo $i;
//     echo '<br>';
//     $i++;
// } while ($i < 10);

#Foreach Loop for Arrays

// $people = array('Doggy', 'Kitty', 'Birdy');

// foreach ($people as $person) {
//     echo $person;
//     echo '<br>';
// }

$people = ['Brad' => 'brad@gmail.com', 'John' => 'Johnd@gmail.com', 'Kimbo' => 'slice@gmail.com', 'joker' => 'card@gmail.com'];

foreach ($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br>';
}
