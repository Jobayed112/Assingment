<?php
// Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.





function factorial($n) {
  if ($n == 0) {
    return 1;
  } else {
    return $n * factorial($n - 1);
  }
}

echo factorial(3); // Output: 120
















?>