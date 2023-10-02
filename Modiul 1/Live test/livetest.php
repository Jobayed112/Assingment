<?php
//tasl 1
$age =23;
echo $age;
echo "\n";

// task2
define('PI',3.23920);
echo "The Value OF PI +".PI; 
echo "\n";

//task 3
$myProgramIs="PHP";
echo "Hello, welcome to the world of {$myProgramIs}  programming";

echo "\n";

// Task 4
$result=((20+5)*3)/4;
echo "The Result Is : {$result}";
//method 2
echo "\n";

$a=20+5;
$b=$a*3;
$c=$b/4;
print("the result is :{$c}");
echo "\n";

// Task 5
$marks=70;
switch (true) {
    case ($marks>=60 && $marks<80):
        echo 'Your Are Passed';
        # code...
        break;
    default:
        echo "You Are Failed.";
        # code...
        break;
}


?>