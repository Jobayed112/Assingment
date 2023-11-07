<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $roll = $_POST['roll'];

    
    $users = [
        'email' => $email,
        'password' => $password,
        'username' => $username,
        'roll' => $roll
    ];

    $_SESSION['user'] = $users; 
    echo "Registration successful!";
} else {
    echo "Invalid request.";
}
?>