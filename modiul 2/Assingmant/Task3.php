<?php
//Task 3
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.




    $a = 0;
    $b = 1;
    $i = 0;

    while ($i < 10) {
        $c = $a + $b;
        echo "$c ";

    if ($c > 100) {
            break;
        }

        $a = $b;
        $b = $c;
        $i++;
    }

    // $fastNumber=0;
    // $secondNumber=1;
   
    // $i=0;
   
    // while ($i < 10){
    //     $fibonacci=$fastNumber+$secondNumber;
    //     echo $fibonacci." \n";


    // switch($fibonacci){
    //     case $fibonacci>=100:
    //         break 2;
    // }
    // $fastNumber=$secondNumber;
    // $secondNumber=$fibonacci;
    // $i++;

    // }

    ?>