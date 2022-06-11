<?php
    include_once 'header.php';
?>
        <?php
        if (isset($_SESSION["userName"])) {
            echo "<p class=\"error-message\">Hello there, " . $_SESSION["userName"] . "</p>";
        }
        ?>

        <section class="about-info">
            <article class="about-main">
                <p>Projekt opisuje oprogramowanie system czujników termicznych oraz wideo służących do zliczania osób oraz prowadzenia statystyk. Czujniki te są zlokalizowane przy drzwiach autobusu i skanują osoby wsiadające i wysiadające.</p>
                <p>Makieta systemu jest stworzona w językach HTML, CSS oraz JavaScript po stronie front-endu oraz PHP po stronie back-endu. Ta makieta nie będzie powiązana z fizycznym odzwierczedleniem czujników, służących do skanowania, lecz będzie korzystała z wirtualnej symulacji procesu skanowania.</p>
                <p>Główne funkcjonalności tej wersji:</p>
                <ol>
                    <li>Gotowa makieta interfejsu graficznego użytkownika;</li>
                    <li>Możliwość logowania się do systemu;</li>
                    <li>Możliwość pobierania szablonów raportów;</li>
                    <li>Symulacja procesu skanowania oraz generowanie raportów wypełnionych pseudorandomowymi danamy;</li>
            </article>
        </section>
<?php
    include_once 'footer.php';
?>
