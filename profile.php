<?php
    include_once 'header.php';
?>

        <div>
            <?php
            if (isset($_SESSION["userName"])) {
                echo "<p class=\"error-message\">Hello there, " . $_SESSION["userName"] . "</p>";
            }
             ?>

             <section class="edit-form">
                 <form class="edycja" id="edit-form" action="php/edit.inc.php" method="POST">
                     <div class="form-element">
                         <div class="form-element">
                             <label for="full_name">Imię i nazwisko: </label>
                             <?php
                             echo "<input type=\"text\" id=\"full_name\" name=\"user_name\" placeholder=\"Imię i nazwisko użytkownika\" value=" . $_SESSION["userFullname"] . ">";
                             ?>
                         </div>

                         <div class="form-element">
                             <label for="username">Imię użytkownika: </label>
                             <?php
                             echo "<input type=\"text\" id=\"username\" name=\"user_username\" placeholder=\"Imię użytkownika\" value=" . $_SESSION["userName"] . " readonly >";
                             ?>
                         </div>

                         <div class="form-element">
                             <label for="e-mail">E-mail: </label>
                             <?php
                             echo "<input type=\"e-mail\" id=\"e-mail\" name=\"user_email\" placeholder=\"E-mail\" value=" . $_SESSION["userEmail"] . ">";
                             ?>
                         </div>

                     </div>
                     <div class="form-button">
                         <input type="submit" name="edit" id="edit" value="Edytuj konto">
                     </div>
                 </form>
             </section>

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
        </div>


   </div>
<?php
    include_once 'footer.php';
?>
