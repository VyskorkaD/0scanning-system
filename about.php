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
                <p>Projekt opisuje system czujników termicznych oraz wideo służących do zliczania osób oraz prowadzenia statystyk. Czujniki te są zlokalizowane przy drzwiach autobusu i skanują osoby wsiadające i wysiadające.</p>
                <p>Cały system będzie zrealizowany w dwóch wersjach:</p>
                <p>Pierwsza wersja: makieta systemu stworzona w językach HTML, CSS oraz JavaScript po stronie front-endu oraz PHP po stronie back-endu. Ta makieta nie będzie powiązana z fizycznym odzwierczedleniem czujników, służących do skanowania, lecz będzie korzystała z wirtualnej symulacji procesu skanowania.</p>
                <p>Główne funkcjonalności tej wersji:</p>
                <ol>
                    <li>Gotowa makieta interfejsu graficznego użytkownika;</li>
                    <li>Możliwość logowania się do systemu;</li>
                    <li>Możliwość pobierania szablonów raportów;</li>
                    <li>Symulacja procesu skanowania oraz generowanie raportów wypełnionych pseudorandomowymi danamy;</li>
                </ol>
                <p>Druga wersja: w pełni funkcjonujący system, które będzie się łączył z systemem czyjników oraz interpretował dane wejściowe. Stworzony będzie w językach HTML, CSS, JavaScript (Framework Angular) po stronie front-endu oraz PHP (Framework Laravel) po stronie back-endu. Baza danych będzie oparta na systemie zarżadzania relacyjnymi bazami danych MySQL. Czujniki będą stworzone na bazie open-source platformy prototypowej Arduino. </p>
            </article>
        </section>
<?php
    include_once 'footer.php';
?>
