<?php
#Conditionals

/*
==
===
<
>
>=
<=
!=
!==
 */

//Works the same as Javascript

/*Logical Operators
AND &&
OR ||
XOR one has to be true but not both...
 */

#Switches

$favColor = 'blue';

switch ($favColor) {
    case 'red':
        echo 'correct!';
        break;
    case 'blue':
        echo 'Bluey!';
        break;
    case 'green':
        echo 'Envy!';
        break;
    case 'Purple':
        echo 'People Eater!';
        break;
    default:
        echo 'Not trying!';
}
