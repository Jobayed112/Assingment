<?php
//Task 1
// Looping with Increment using a Function
// আমি ইংলিশ খুব একটা পারিনা যেটা বুঝেছি ওইভাবে করেছি
// এই জন্য ৩ টা ফাংশান লিখেছি


function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
      if ($i % 2 == 0) {
        echo "$i ";
      }
    }
  echo PHP_EOL;
  }
  
  printEvenNumbers(2, 20, 2);
  
  // Using while loop
  function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
      if ($i % 2 == 0) {
        echo "$i ";
      }
      $i += $step;
    }
    echo PHP_EOL;
  }
  
  printEvenNumbersWhile(2, 20, 2);
  
//   // Using do-while loop
  function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
      if ($i % 2 == 0) {
        echo "$i ";
      }
      $i += $step;
    } while ($i <= $end);
    echo PHP_EOL;

  }
  
  printEvenNumbersDoWhile(2, 20, 2);















?>