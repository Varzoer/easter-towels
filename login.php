<?php
include_once 'header.php';
?>

<h2>log in</h2>
<br>
<section class="login-form">
    <form action="includes/login_inc.php" method="POST">
        <input type="text" name="email" placeholder="Email...">
        <br>
        <input type="password" name="pwd" placeholder="Pasword...">
        <br>
        <button type="submit" name="submit">Log in!</button>
        <br>
    </form>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] === 'emptyinput') {
            echo "<p class ='error'>You did not fill in all fields</p>";
        } elseif ($_GET['error'] === 'wrongemail') {
            echo "<p class ='error'>Incorect password</p>";
        } elseif ($_GET['error'] === 'wrongpassword') {
            echo "<p class ='error'>Incorect E-mail</p>";
        }
    }
    ?>
</section>
<?php
include_once 'footer.php';
?>