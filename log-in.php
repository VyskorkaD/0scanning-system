<?php
    include_once 'header.php';
?>


        <section class="login-form">
            <form class="logowanie" id="login-form" action="php/login.php" method="POST">
                <div class="form-element">
                    <label for="login">Login: </label>
                    <input type="login" id="login" name="user_login" value="" required>
                </div>
                <div class="form-element">
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="user_password" value="" required>
                </div>
                <div class="form-button">
                    <input type="submit" name="submit" id="submit" value="Zaloguj się">
                </div>
            </form>
        </section>
    </body>
</html>
