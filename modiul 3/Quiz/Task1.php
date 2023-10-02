<?php




// What is the output of the following code?

// $numbers = [1, 2, 3, 4, 5];

// $result = count($numbers);

// print_r($result);



// $fruits = ['apple', 'banana', 'cherry'];

// echo $fruits[1];





// What is the correct way to add 'orange' to the end of the array $fruits?

// $fruits = [ 'banana','a'=> 'cherry','apple'];

// // $fruits[]='orange';
// // print_r($fruits);
// // array_pop($fruits);
// // asort($fruits);
// // print_r($fruits);

// if(in_array($value,$fruits)){
//     echo "The $value ";
// }else{
//     "The $value";
// }
// print_r($value);






$fruits = ['apple','v'=> 'banana', 'cherry', 'orange'];

// $value = 'apple';

// if (in_array($value, $fruits)) {
//   echo "The value $value is in the array.";
// } else {
//   echo "The value $value is not in the array.";
// }

$n=in_array($value,$fruits);
print_r($n);


?>