<?php
    include_once 'header.php';
?>
        <?php
        if (isset($_SESSION["userName"])) {
            echo "<p class=\"error-message\">Dzień dobry, " . $_SESSION["userName"] . "</p>";
        }
        ?>

        <section class="about-info">
            <article class="about-main">
                <p>Projekt przedstawia oprogramowanie służące do sumylacji zliczania zeskanowanych w pojazdach komunikacji miejskiej pasażerów.</p>
                <p>System jest stworzony w językach HTML, CSS oraz JavaScript po stronie front-endu oraz PHP po stronie back-endu. Ten system nie jest  powiązany z fizycznym odzwierczedleniem czujników, służących do skanowania, lecz korzysta z wirtualnej symulacji procesu skanowania.</p>
                <p>Główne funkcjonalności systemu:</p>
                <ol>
                    <li>Gotowy interfejs graficzny użytkownika;</li>
                    <li>Możliwość tworzenia konta oraz logowania się do systemu;</li>
                    <li>Symulacja procesu skanowania oraz generowanie raportów wypełnionych pseudolosowymi danymi;</li>
                    <li>Możliwość tworzenia wykresów slużących do porównywania liczby pasażerów dla poszczególnych linii komunikacji miejskiej;</li>

            </article>
        </section>
<?php
    include_once 'footer.php';
?>
