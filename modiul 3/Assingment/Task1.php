<?php

/**
 * Task 1: String Manipulation    
 * Create a string variable called $text with the value "The quick
 *   brown fox jumps over the lazy dog.". Write a PHP function which
 *  Convert the string to all lowercase.
 * eplace "brown" with "red" in the string.
 *  Prin quick brown fox jumps over the lazy dog.";
*function modify($modifyText){
* $lowerCase=strtolower($modifyText);
* $modifyText=str_replace('brown','red',$lowerCase);t the modified text.

 * 
*/
$test="The Quick brown fox jumps over the lazy";
function modify($test){
    $modifyText=strtolower($test);
    $modifyText=str_replace('brown','red',$modifyText);
    return $modifyText;
}

// $modifiedText=modify($test); 
// echo $modifiedText;

echo modify($test);
$numner=29;

?>