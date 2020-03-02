<?php

$err = "";
$_POST["password"] = "123";

if(!empty($_POST["password"]) && $_POST["password"] != "" ){

    if (strlen($_POST["password"]) <= '8') {
        $err .= "Your Password Must Contain At Least 8 Digits !"."<br>";
    }
    if(!preg_match("#[0-9]+#",$_POST["password"])) {
        $err .= "Your Password Must Contain At Least 1 Number !"."<br>";
    }
    if(!preg_match("#[A-Z]+#",$_POST["password"])) {
        $err .= "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
    }
    if(!preg_match("#[a-z]+#",$_POST["password"])) {
        $err .= "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
    }
    if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
        $err .= "Your Password Must Contain At Least 1 Special Character !"."<br>";
    }
}else{
    $err .= "Please Enter your password"."<br>";
}

echo($err);


// Given password
$password = '852741';

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    echo 'Strong password.';
}