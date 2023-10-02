<?php

/***
Task 2: Array Manipulation

 * Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
 */

//  $numbersRemove=range(1,10);
$numbersRemove=[1,2,3,4,5,6,7,8,9,10];
function removeEvenNumbers($numbers){
    // $removeNumber=[];
    foreach($numbers as $num){
        if($num % 2!==0){
            $removeNumber[]=$num;
        }

    }
    return $removeNumber;
}
print_r(removeEvenNumbers($numbersRemove));


// $even=removeEvenNumbers($numbersRemove);
// print_r($even); 












?>