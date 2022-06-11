<?php
if(isset($_POST["user_username"])) {
    $name = $_POST["user_username"];
    //var_dump ($_POST);
}

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

deleteUser($conn, $name);
exit();
