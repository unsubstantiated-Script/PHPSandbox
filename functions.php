<?php
#Function

//Can set defaults
// function addStuff($num1 = 0, $num2 = 0)
// {
//     echo $num1 + $num2;
// };

// addStuff(22, 33);

// function addStuff($num1 = 0, $num2 = 0)
// {
//     return $num1 + $num2;
// };

// $sum = addStuff(22, 33);

// echo $sum;

//Passing Arguments by Reference
$myNum = 10;

function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{
    $num += 10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";
