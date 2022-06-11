<?php
    include_once 'header.php';
?>
<section class="delete-form">
    <form class="usuniecie" id="delete-form" action="php/delete.inc.php" method="POST">
        <div class="form-element">
            <?php
                echo "<input type=\"hidden\" id=\"hidden\" name=\"user_username\" value=" . $_SESSION["userName"] . ">";
            ?>

        </div>
        <div class="form-button">
            <input type="submit" name="delete" id="delete" value="Usuń konto">
        </div>
    </form>
</section>
        <div>
            <?php
            if (isset($_SESSION["userName"])) {
                echo "<p class=\"error-message\">Hello there, " . $_SESSION["userName"] . "</p>";
            }

             echo "<button type=\"submit\">Usuń konto</button>";
             ?>
        </div>
<?php
    include_once 'footer.php';
?>
