<?php
    include_once 'header.php';
?>
        <section class="signup-form">
            <form class="registration" id="signup-form" action="php/signup.php" method="POST">
                <div class="form-element">
                    <label for="e-mail">E-mail: </label>
                    <input type="e-mail" id="e-mail" name="user_email" value="" required>
                </div>
                <div class="form-element">
                    <label for="confirm_e-mail">Potwierdź e-mail: </label>
                    <input type="e-mail" id="confirm_e-mail" name="email_confirmation" value="" required>
                </div>
                <div class="form-element">
                    <label for="password">Hasło: </label>
                    <input type="password" id="password" name="user_password" value="" required>
                </div>
                <div class="form-element">
                    <label for="confirm_password">Potwierdź hasło: </label>
                    <input type="password" id="confirm_password" name="password_confirmation" value="" required>
                </div>
                <div class="form-button">
                    <input type="submit" name="submit" id="submit" value="Zarejestruj się">
                </div>
            </form>
        </section>
<?php
    include_once 'footer.php';
?>
