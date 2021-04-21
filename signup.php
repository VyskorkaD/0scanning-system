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
                    <input type="e-mail" id="e-mail" name="user_email" placeholder="E-mail..." required>
                </div>

                <div class="form-element">
                    <label for="password">Hasło: </label>
                    <input type="password" id="password" name="user_password" placeholder="Password..." required>
                </div>

                <div class="form-element">
                    <label for="confirm_password">Potwierdź hasło: </label>
                    <input type="password" id="confirm_password" name="user_password_repeat" placeholder="Confirm password..." required>
                </div>

                <div class="form-button">
                    <input type="submit" name="submit" id="submit" value="Zarejestruj się">
                </div>

            </form>
        </section>
<?php
    include_once 'footer.php';
?>
