<?php
    include_once 'header.php';
?>
        <section class="login-form">
            <form class="logowanie" id="login-form" action="php/login.inc.php" method="POST">
                <div class="form-element">
                    <label for="login">Login: </label>
                    <input type="login" id="login" name="user_username" palceholder="Username/email...">
                </div>
                <div class="form-element">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="user_password" placeholder="Password...">
                </div>
                <div class="form-button">
                    <input type="submit" name="submit" id="submit" value="Zaloguj się">
                </div>
            </form>
        </section>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class=\"error-message\">Please fill in all input fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p class=\"error-message\">Wrong login or password!</p>";
            }
        }
        ?>
<?php
    include_once 'footer.php';
?>
