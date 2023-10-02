<?php
// Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.

function fibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
}

fibonacci(10);


?>