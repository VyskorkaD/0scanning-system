<?php
    var_dump($_POST);
//if (isset($_POST['submit'])) {
    $username = $_POST["user_username"];
    $name = $_POST["user_name"];
    $email = $_POST["user_email"];
    //$password = $_POST["user_password"];
    //$passwordRepeat = $_POST["user_password_repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    /*if (emptyInputEdit($name, $email, $username) !== false) {
       header("location: ../profile.php?error=emptyinput");
       exit();
    }

    if(invalidUserName($username) !== false){                                 //error handler - is username valid?
        header("location: ../profile.php?error=invalidusername");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("location: ../profile.php?error=invalidemail");
        exit();
    }*/

    editUser($conn, $name, $email, $username);

//}
/*else {
    header("location: ../profile.php");
    exit();
}*/
