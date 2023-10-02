<?php

// Task 3: Array Sorting  


// Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
$numbersRemove=12;


$grades=[
    85, 92, 78, 88, 95.
];
function sortGradesDescending($grade){
   rsort($grade);
//    sort($grade);   //Without keys

    return $grade;
}

print_r(sortGradesDescending($grades));

// $n=s($grades);
// print_r($n);

















?>