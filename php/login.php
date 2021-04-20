<?php
if(($_POST['user_login'] == 'root') && ($_POST['user_password'] == 'root')) {
        header("Location: ../logged-in.php");
    }
    else {
        header("Location: ../log-in.php");
    }
?>
