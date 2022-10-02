<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once "dbh_inc.php";
    require_once "function_inc.php";

    if (emptyInputSignup($username, $email, $pwd, $pwdRepeat) !== false) {
        header('Location: ../signup.php?error=emptyinput');
        exit();
    }
    if (invalidUsername($username) !== false) {
        header('Location: ../signup.php?error=invalidusername');
        exit();
    }
    if (invalidEmail($email) !== false) {
        header('Location: ../signup.php?error=invalidemail');
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header('Location: ../signup.php?error=differentpasswords');
        exit();
    }
    if (pwdValidLength($pwd) !== false) {
        header('Location: ../signup.php?error=pwdinvalidlength');
        exit();
    }
    if (usernameExists($conn, $username) !== false) {
        header('Location: ../signup.php?error=usernametaken');
        exit();
    }
    if (emailExists($conn, $email) !== false) {
        header('Location: ../signup.php?error=emailtaken');
        exit();
    }

    createUser($conn, $username, $email, $pwd);
} else {
    header('Location: ../signup.php');
    exit();
}
