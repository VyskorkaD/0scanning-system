<?php
if(($_POST['user_login'] == 'root') && ($_POST['user_password'] == 'root')) {
        header("Location: ../contact.php");
    }
    else {
        header("Location: ../log-in.php");
    }
?>
