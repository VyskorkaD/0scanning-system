<?php
    include_once 'header.php';
?>
        <section class="signup-form">
            <form class="registration" id="signup-form" action="php/signup.inc.php" method="POST">

                <div class="form-element">
                    <label for="full_name">Imię i nazwisko: </label>
                    <input type="text" id="full_name" name="user_name" placeholder="Imię i nazwisko...">
                </div>

                <div class="form-element">
                    <label for="username">Imię uzytkownika: </label>
                    <input type="text" id="username" name="user_username" placeholder="Imię użytkownika...">
                </div>

                <div class="form-element">
                    <label for="e-mail">E-mail: </label>
                    <input type="e-mail" id="e-mail" name="user_email" placeholder="E-mail..." >
                </div>

                <div class="form-element">
                    <label for="password">Hasło: </label>
                    <input type="password" id="password" name="user_password" placeholder="Hasło..." >
                </div>

                <div class="form-element">
                    <label for="confirm_password">Powtórz hasło: </label>
                    <input type="password" id="confirm_password" name="user_password_repeat" placeholder="Powtórz hasło...">
                </div>

                <div class="form-button">
                    <input type="submit" name="submit" id="submit" value="Zarejestruj się">
                </div>
            </form>
        </section>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class=\"error-message\">Proszę o wypełnienie wszystkich pól.</p>";
                }
                else if ($_GET["error"] == "invalidusername") {
                    echo "<p class=\"error-message\">Nieprawidłowe imię użytkownika.</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p class=\"error-message\">Nieprawidłowy e-mail.</p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p class=\"error-message\">Hasła muszą być identyczne.</p>";
                }
                elseif ($_GET["error"] == "usernametaken") {
                    echo "<p class=\"error-message\">Uzytkownik o takim imieniu użytkownika już istnieje w systemie.</p>";
                }
                else if ($_GET["error"] == "emailalreadytaken") {
                    echo "<p class=\"error-message\">E-mail jest wykorzystywany przez innego użytkownika.!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p class=\"error-message\">Ups! Coś poszło nie tak.</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p class=\"error-message\">Rejestracja przebiegła pomyślnie.</p>";
                }
            }
        ?>



<?php
    include_once 'footer.php';
?>
