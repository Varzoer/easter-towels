<?php
include_once 'header.php';
?>

<h2>sign up</h2>
<br>
<section class="signup-form">
    <form action="includes/signup_inc.php" method="POST">
        <input type="text" name="username" placeholder="Username...">
        <br>
        <input type="text" name="email" placeholder="E-mail...">
        <br>
        <input type="password" name="pwd" placeholder="Pasword...">
        <br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <br>
        <button type="submit" name="submit">Sign up!</button>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] === 'emptyinput') {
                echo "<p class ='error'>You did not fill in all fields</p>";
            } elseif ($_GET['error'] === 'invalidusername') {
                echo "<p class ='error'>Invalide username</p>";
            } elseif ($_GET['error'] === 'invalidemail') {
                echo "<p class ='error'>Invalide email</p>";
            } elseif ($_GET['error'] === 'differentpasswords') {
                echo "<p class='error'>Passwords doesn't match!</p>";
            } elseif ($_GET['error'] === 'pwdinvalidlength') {
                echo "<p class 'error'>Password is too short! At least 10 characters!</p>";
            } elseif ($_GET['error'] === 'usernametaken') {
                echo "<p class ='error'>This username already taken!</p>";
            } elseif ($_GET['error'] === 'emailtaken') {
                echo "<p class ='error'>This E-mail already taken!</p>";
            } elseif ($_GET['error'] === 'stmtfailed') {
                echo "<p class ='error'>Oops! Somthing went wrong! Please try again!</p>";
            } elseif ($_GET['error'] === 'none') {
                echo "<p class ='success'>You have signed up!</p>";
            }
        }
        ?>
</section>
</form>

<?php
include_once 'footer.php';
?>