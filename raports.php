<?php
    include_once 'header.php';
?>

<?php
    if (!isset($_SESSION["userName"])) {
        header("location: about.php");
    }
?>


        <div class="raport-type">
            <button onclick="expandList(this.nextSibling)" class="raport-button" type="raport-button" name="button-1">Przejazd</button>
            <section class="raports">
                <?php
                    $scannedDirectory = scandir("raports/ride");
                    $filesList = array_slice($scannedDirectory, 2);
                    if (!empty($filesList)) {
                        foreach ($filesList as $file) {
                            echo "<a href=\"./raports/ride/$file\" download><p>$file</p></a>";
                        }
                    }
                    else {
                        echo "<p>Brak raportów.</p>";
                    }
                ?>
            </section>
            <button onclick="expandList(this.nextSibling)" class="raport-button" type="raport-button" name="button-2">Dzienny</button>
            <section class="raports">
                <?php
                    $scannedDirectory = scandir("raports/daily");
                    $filesList = array_slice($scannedDirectory, 2);
                    if (!empty($filesList)) {
                       foreach ($filesList as $file) {
                            echo "<a href=\"./raports/daily/$file\" download><p>$file</p></a>";
                        }
                    }
                    else {
                        echo "<p>Brak raportów.</p>";
                    }
                ?>
            </section>
            <button onclick="expandList(this.nextSibling)" class="raport-button" type="raport-button" name="button-3">Tygodniowy</button>
            <section class="raports">
                <?php
                    $scannedDirectory = scandir("raports/weekly");
                    $filesList = array_slice($scannedDirectory, 2);
                    if (!empty($filesList)) {
                        foreach ($filesList as $file) {
                            echo "<a href=\"./raports/weekly/$file\" download><p>$file</p></a>";
                        }
                    }
                    else {
                        echo "<p>Brak raportów.</p>";
                    }
                ?>
            </section>
            <button onclick="expandList(this.nextSibling)" class="raport-button" type="raport-button" name="button-4">Miesięczny</button>
            <section class="raports">
                <?php
                    $scannedDirectory = scandir("raports/monthly");
                    $filesList = array_slice($scannedDirectory, 2);
                    if (!empty($filesList)) {
                        foreach ($filesList as $file) {
                            echo "<a href=\"./raports/monthly/$file\" download><p>$file</p></a>";
                        }
                    }
                    else {
                        echo "<p>Brak raportów.</p>";
                    }
                ?>
            </section>
        </div>

<script>
    function expandList(element) {
        function removeClass(element) {         //function that removes class
            element.classList.remove("show");
        }

        let sectionArrayCollection = document.getElementsByTagName("section");  //get all hidden sections into HTMLCollection
        let sectionArray = Array.prototype.slice.call(sectionArrayCollection); //convert it to array
        //console.log(sectionArray);
        sectionArray.forEach(element => removeClass(element));  //remove class "show" for every section

        element.nextSibling.classList.add("show");   //add class "show" for section under clicked button
    }
</script>

<?php
    include_once 'footer.php';
?>
