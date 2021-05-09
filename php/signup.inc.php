<?php
 if (isset($_POST["submit"])) {           //did user use submit to go to page?
     $name = $_POST["user_name"];
     $username = $_POST["user_username"];
     $email = $_POST["user_email"];
     $password = $_POST["user_password"];
     $passwordRepeat = $_POST["user_password_repeat"];

     require_once 'dbh.inc.php';
     require_once 'functions.inc.php';


     if (emptyInputSignUp($name, $username, $email, $password, $passwordRepeat) !== false) {       //error handler - is input empty
        header("location: ../signup.php?error=emptyinput");                     //then redirect to signup page
        exit();
     }

     if(invalidUserName($username) !== false){                                 //error handler - is username valid?
         header("location: ../signup.php?error=invalidusername");
         exit();
     }

     if(invalidEmail($email) !== false) {
         header("location: ../signup.php?error=invalidemail");
         exit();
     }

     if(passwordMatch($password, $passwordRepeat) !== false) {
         header("location: ../signup.php?error=passwordsdontmatch");
         exit();
     }

     if(usernameExists($conn, $username, $email) !== false) {
         header("location: ../signup.php?error=usernametaken");
         exit();
     }

     createUser($conn, $name, $username, $email, $password);

 }
 else {
     header("location: ../signup.php");   //if no, redirect to signup page
     exit();
 }
