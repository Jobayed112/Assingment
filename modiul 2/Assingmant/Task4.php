<?php
//Task 4
// Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.

function fibonacci($number){
    $a=0;
    $b=1;
    for ($i=0;$i<$number;$i++) {
        $c=$a+$b;
        $a=$b;
        $b=$c;
        echo"$c " ;
    }
    echo PHP_EOL;
}

fibonacci(10);

















?>