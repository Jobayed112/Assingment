<?php
//Task 2
// // Skip Multiples of 5
// Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
// loop encounters a multiple of 5, it should skip that number using the continue statement and
// continue to the next iteration
// আমি ইংলিশ খুব একটা পারিনা যেটা বুঝেছি ওইভাবে করেছি
//এখানে আমি বুঝতে পারিনি যে পাঁচের সাথে গুন করবো নাকি কন্টিনিউ হবে


echo "<h4>";
echo "<pre>";
echo "Without Function";
echo PHP_EOL;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
      continue;
    }
    echo "$i ";
  }
echo PHP_EOL;
echo "Function";
echo PHP_EOL;


// function continueFive($five,$numbers){
//     for ($i = $five; $i <= $numbers; $i += $five) {
//         if ($i == 5) {
//           continue;
//         }
//         echo "$i ";
//       }

// }

// continueFive(1,50);



// echo "</pre>";

// echo "</h4>";







?>