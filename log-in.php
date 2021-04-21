<?php
    include_once 'header.php';
?>
        <section class="login-form">
            <form class="logowanie" id="login-form" action="php/login.inc.php" method="POST">
                <div class="form-element">
                    <label for="login">Login: </label>
                    <input type="login" id="login" name="user_login" palceholder="Username/email..." required>
                </div>
                <div class="form-element">
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="user_password" placeholder="Password..." required>
                </div>
                <div class="form-button">
                    <input type="submit" name="submit" id="submit" value="Zaloguj się">
                </div>
            </form>
        </section>
<?php
    include_once 'footer.php';
?>
