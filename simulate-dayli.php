<?php
    include_once 'header.php';
?>

<?php
    if (!isset($_SESSION["userName"])) {
        header("location: about.php");
    }
?>



        <div>
            <h2>Symulacja skanowania, dzienna</h2>
            <form action="php/simulate-dayli.inc.php" method="POST">
                <input type="radio" id="working" name="typeOfDay" value="Working">
                <label for="working">Working day</label><br>
                <input type="radio" id="saturday" name="typeOfDay" value="Saturday">
                <label for="saturday">Saturday</label><br>
                <input type="radio" id="sunday" name="typeOfDay" value="Sunday">
                <label for="sunday">Sunday</label><br>



                <input type="submit" name="submit" value="Symuluj skanowanie">
            </form>
        </div>


<?php
    include_once 'footer.php';
?>
