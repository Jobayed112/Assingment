<?php

// Task 1 
// Create an associative array called $student with the following key-value pairs:



// $student = [
//     'name' => 'Alice',
//     'age'=> 22,
//     'grade' => 'A'
// ];

// echo $student['age'];




//Task 2
// / Create an associative array called $student with the key-value pairs:

// Check if the 'grade' key exists in the array using array_key_exists() and print the result.



// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// ];

// if(array_key_exists('grade',$student)){
//     echo "The Grade exist in the student array";
// }else{
//     "The 'Grade' Not Exist in the student Array";
// }



// Task 3

// Create an array called $numbers with values 100, 200, 50, 40, 50.
// Use a foreach loop to print each value in the array.

// $num=[100,200,50,40,50];
// foreach($num as $number){
//     echo $number."\n";
// }


// // or 

// $numbers=explode(',','100,200,50,40,50');
// print_r($numbers);

// foreach($numbers as $number){
//     echo $number."\n";
// }





// Task 4
// Create an array called $names with values 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', ‘Moni’.

// Use the array_filter() function to filter names that start with the letter 'M'.

// Print the filtered names.



// $names = ['talha','Moni', 'mfnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin' ];
// function name($names){
//    return ($names[0]=='M'|| $names[0]=="m");
// //    return substr($names,0,1)==='m';
// }

// $filterdNames = array_filter($names,'name');

// print_r($filterdNames);



// task 5
// Create a string variable $originalString with the value 'Hello, World!'.

// Use the strrev() function to reverse the string.

// Print the reversed string.


$orginal="Hello, World";

$defaltValues=strrev($orginal);
print_r($defaltValues);


















?>