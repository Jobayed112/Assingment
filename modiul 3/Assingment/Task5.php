<?php
// Task 5
// Function to generate a random password

function generatePassword($length){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $charLen=strlen($characters)-1;
    $password=' ';
    for ($i=0; $i <$length ; $i++) {
        $random= rand(0,$charLen);
        $password.=$characters[$random];
        # code...
    }
    return $password;
}
echo generatePassword(3);
?>