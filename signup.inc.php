<?php

    

if($_SERVER["REQUEST_METHOD"]=="POST"){

$firstName=$_POST['firstName'];
$lastName=$_POST["lastName"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

try {

    require_once "../includes/dbh.inc.php";
    require_once "signup_model.inc.php";
   // require_once "signup_contr.inc.php";

    //errror hamndlers
    $errors = [];


if(is_input_empty($firstName, $lastName, $username, $email, $password)){
$errors["empty_input"] = "fill in all fields!";
}
if(is_email_invalid($email)){
    $errors["email_invalid"] = "email invalid!";
}
if(is_username_taken($pdo, $username)){
    $errors["username_taken"] = "username is taken!";
}

if(is_email_taken($email)){
    $errors["username_email"] = "email is taken!";
}

require_once "configsession.inc.php";

if($errors){
    $_SESSION["errors_signup"] = $errors;
    header("location: ". $e->getMessage());
}

}catch (PDOException $e) {
    die("query failed: ". $e->getMessage());
}
}
else{
    header("location: ../indexpage.php/index.php");
    die();
}