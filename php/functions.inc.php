<?php
function emptyInputSignUp($name, $username, $email, $password, $passwordRepeat) {
    $result;
    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {                   //check if any of variables is empty
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}



function invalidUserName($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {                            //check if $username DOES NOT have only symbols from pattern
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}



function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {                          //check if $email DOES NOT a valid email
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}



function passwordMatch($password, $passwordRepeat) {
    $result;
    if ($password !== $passwordRepeat) {                                    //check if passwords are not the same
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}



function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEMAIL = ?;";                  //create an SQL statement. "stmt" for statement
    $stmt = mysqli_stmt_init($conn);                                        //initialize a statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {                                //run $sql in DB (with $stmt) and see if there are any errors
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);                          //bind parameters to the SQL query and tell DB what the parameters are. "s" for string
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);                         //Take result data from the DB (after executing $sql statement)

    if ($row = mysqli_fetch_assoc($resultData)) {                           //create variable and put data from DB (if exists) to this variable
        return $row;                                                        //return data from DB. Later I will use it in login procedure
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}



function createUser($conn, $name, $email, $username, $password) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUsername, usersPassword) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=failedtocreateuser");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}


function editUser ($conn, $name, $email, $username) {

    $sql = "UPDATE users
            SET usersName = '$name', usersEmail = '$email'
            WHERE usersUsername = '$username';";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    session_unset();
    session_destroy();
    header ("location: ../about.php");;
    exit();
}


function deleteUser($conn, $name) {
    $sql = "DELETE FROM users WHERE usersUsername = '$name';";
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);

    session_start();
    session_unset();
    session_destroy();
    header("location: ../about.php");

    exit();
}

function emptyInputEdit($name, $email, $username) {
    $result;
    if (empty($name) || empty($email) || empty($username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

/* Function that logs in user */
function loginUSer($conn, $username, $password) {
    $usernameExists = usernameExists($conn, $username, $username);  //try to grab user from DB

    if ($usernameExists == false) {    //if no, redirect with error
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $usernameExists["usersPassword"];  //grab hashed password from DB
    $checkPassword = password_verify($password, $passwordHashed);  //verify if pwd from user is the same as in DB

    if ($checkPassword === false) {  //if no, redirect with error
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();    //if yes, start new session
        $_SESSION["userid"] = $usernameExists["usersID"];
        $_SESSION["userName"] = $usernameExists["usersUsername"];
        $_SESSION["userEmail"] = $usernameExists["usersEmail"];
        $_SESSION["userFullname"] = $usernameExists["usersName"];
        header("location: ../about.php");
        exit();
    }
}
