<?php
    include_once 'header.php';
?>
        <section class="signup-form">
            <form class="registration" id="signup-form" action="php/signup.inc.php" method="POST">

                <div class="form-element">
                    <label for="full_name">Full name: </label>
                    <input type="text" id="full_name" name="user_name" placeholder="Full name...">
                </div>

                <div class="form-element">
                    <label for="username">Username: </label>
                    <input type="text" id="username" name="user_username" placeholder="Username...">
                </div>

                <div class="form-element">
                    <label for="e-mail">E-mail: </label>
                    <input type="e-mail" id="e-mail" name="user_email" placeholder="E-mail..." >
                </div>

                <div class="form-element">
                    <label for="password">Password: </label>
                    <input type="password" id="password" name="user_password" placeholder="Password..." >
                </div>

                <div class="form-element">
                    <label for="confirm_password">Confirm password: </label>
                    <input type="password" id="confirm_password" name="user_password_repeat" placeholder="Confirm password...">
                </div>

                <div class="form-button">
                    <input type="submit" name="submit" id="submit" value="Sign up">
                </div>
            </form>
        </section>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class=\"error-message\">Fill in all fields, please!</p>";
                }
                else if ($_GET["error"] == "invalidusername") {
                    echo "<p class=\"error-message\">Username is invalid!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p class=\"error-message\">E-mail is invalid!</p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p class=\"error-message\">Passwords must be the same!</p>";
                }
                elseif ($_GET["error"] == "usernametaken") {
                    echo "<p class=\"error-message\">Username already taken!</p>";
                }
                else if ($_GET["error"] == "emailalreadytaken") {
                    echo "<p class=\"error-message\">E-mail already taken!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p class=\"error-message\">Something went wrong!</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p class=\"error-message\">You signed up successfully!</p>";
                }
            }
        ?>



<?php
    include_once 'footer.php';
?>
