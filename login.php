<?php
    include_once 'header.php';
?>

<section class="login-form">
    <form class="logowanie" id="login-form" action="php/login.inc.php" method="POST">
        <div class="form-element">
            <label for="login">Login: </label>
            <input type="login" id="login" name="user_username" palceholder="Imię użytkownik/e-mail...">
        </div>
        <div class="form-element">
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="user_password" placeholder="Hasło...">
        </div>
        <div class="form-button">
            <input type="submit" name="submit" id="submit" value="Zaloguj się">
        </div>
    </form>
</section>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class=\"error-message\">Proszę wypełnić wszystkie pola!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p class=\"error-message\">Nieprawidłowy login lub hasło!</p>";
            }
        }
        ?>
<?php
    include_once 'footer.php';
?>
