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
    if (!preg_match("/^[a-zA-Z0-9]*$/"), $username) {                            //check if $username DOES NOT have only symbols from pattern
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATES_EMAIL)) {                          //check if $email DOES NOT a valid email
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

function usernameExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersUsername = ?;";                  //create an SQL statement. "stmt" for statement
    $stmt = mysqli_stmt_init($conn);                                        //initialize a statement (i don't exactly know how it works)
    if (!mysqli_stmt_prepare($stmt, $sql)) {                                //run $sql in DB (with $stmt) and see if there are any errors
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);                          //bind parameters to the SQL query and tell DB what the parameters are. "s" for string
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_gets_results($stmt);                         //Take result data from the DB (after executing $sql statement)

    if ($row = mysqli_fetch_assoc($resultData)) {                           //create variable and put data from DB (if exists) to this variable
        return $row;                                                        //return data from DB. Later I will use it in login procedure
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function emailAlreadyTaken($conn, $email) {
    $sql = "SELECT * FROM users WHERE usersEmail =?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_gets_results($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
}

function createUser($conn, $name, $username, $email, $password) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUsername, usersPassword) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepared($stmt, $sql)) {
        header("location: ../signup.php?error=failedtocreateuser")
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_params($stmt, "ssss", $name, $username, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt)
    header("location: ../signup.php?error=none");
    exit();
}
