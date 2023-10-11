<?php



var_dump($_GET['password']);

function randomPassword() {

    $inputPassw = $_GET['password'];
    
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&/^-.;,_<>\|';

    $alphaLength = strlen($alphabet);

    $passw = '';

    for ($i = 0; $i < strlen($inputPassw); $i++) {
       $randomIndex = random_int(0, $alphaLength);

       $passw .= $alphabet[$randomIndex];
    }

    return $passw; 
};

var_dump(randomPassword());


?>