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
                <p>Raport przejazdu 1</p>
                <p>Raport przejazdu 2</p>
                <p>Raport przejazdu 3</p>
                <p>Raport przejazdu 4</p>
                <p>Raport przejazdu 5</p>
                <p>Raport przejazdu 6</p>
            </section>
            <button onclick="expandList(this.nextSibling)" class="raport-button" type="raport-button" name="button-2">Dzienny</button>
            <section class="raports">
                <p>Raport dzienny 1</p>
                <p>Raport dzienny 2</p>
                <p>Raport dzienny 3</p>
                <p>Raport dzienny 4</p>
                <p>Raport dzienny 5</p>
                <p>Raport dzienny 6</p>
            </section>
            <button onclick="expandList(this.nextSibling)" class="raport-button" type="raport-button" name="button-3">Tygodniowy</button>
            <section class="raports">
                <p>Raport tygodniowy 1</p>
                <p>Raport tygodniowy 2</p>
                <p>Raport tygodniowy 3</p>
                <p>Raport tygodniowy 4</p>
                <p>Raport tygodniowy 5</p>
                <p>Raport tygodniowy 6</p>
            </section>
            <button onclick="expandList(this.nextSibling)" class="raport-button" type="raport-button" name="button-4">Miesięczny</button>
            <section class="raports">
                <p>Raport miesięczny 1</p>
                <p>Raport miesięczny 2</p>
                <p>Raport miesięczny 3</p>
                <p>Raport miesięczny 4</p>
                <p>Raport miesięczny 5</p>
                <p>Raport miesięczny 6</p>
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
