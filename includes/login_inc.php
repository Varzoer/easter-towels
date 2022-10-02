<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    require_once "dbh_inc.php";
    require_once "function_inc.php";

    if (emptyInputLogin($email, $pwd) !== false) {
        header('Location: ../login.php?error=emptyinput');
        exit();
    }

    loginUser($conn, $email, $pwd);
} else {
    header('Location: ../login.php');
    exit();
}