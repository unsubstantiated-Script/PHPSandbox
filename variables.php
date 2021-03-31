<?php

//single line comment
#Single line comment
/*multiline comment*/

    // echo 'Hello World';
    // print 'Hello Wurld';

    //variables

    /*
        -Prefix with $
        - Start with letter or an underscore
        - Only letters, numbers, and underscores 
        - Case sensitive
    */

    #DataTypes
    /*
        String
        Integers
        Floats
        Booleans
        Arrays
        Objects
        Null
        Resource
    */

    // $output = 'Hello Wurld!';
    // $num1 = 4; 
    // $num2 = 10; 

    // $sum = $num1 + $num2 ;
    // $float1 = 4.4;
    // $bool1 = true;

    // $string1 = "hello!";
    // $string2 ="Woruldz?";

    // $concatz = $string1 . " " . $string2;
    // $greeting2 = "$string1 $string2";

    // echo $output;
    // echo $sum;

    // echo $concatz;
    // echo $greeting2;



    #Escape sequences
    $string3 = 'They\'re here!';
    echo $string3;


    #Defining constants 
    //const name, content, true or false if case insensitive...
    define('GREETING', "Hello Everyone");

    echo GREETING


?>