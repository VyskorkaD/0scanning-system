<?php
    include_once 'header.php';
    include_once 'header.php';
    require_once 'php/dbh.inc.php';
    require_once 'php/simulation-functions.inc.php';
?>

<?php
    if (!isset($_SESSION["userName"])) {
        header("location: about.php");
    }
?>



        <div>
            <h2>Symulacja skanowania, dzienna</h2>
            <form action="php/simulate-dayli.inc.php" method="POST">
                <input type="date" min="2015-01-01" max="2025-01-01" name="date" value="2015-01-01" required>
                <input type="submit" name="submit" value="Symuluj skanowanie">
            </form>
        </div>

        <div>
            <table>
                <?php
                $sql = "SELECT * FROM dayliraports;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                echo "<table border='1'>
                <tr>
                <th>Id autobusu</th>
                <th>Data</th>
                <th>Liczba skanowań</th>
                </tr>";
                while($row = $result->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $row['busID'] . "</td>";
                    echo "<td>" . $row['day'] . "</td>";
                    echo "<td>" . $row['scanQuantity'] . "</td>";
                    echo "</tr>";
                }}
                else {
                    echo "0 results";
                }
                ?>
            </table>
        </div>

        <div>
            <form action="php/make-chart.inc.php" method="POST">
                <input type="date" min="2015-01-01" max="2025-01-01" name="date" value="2015-01-01" required>
                <input type="submit" name="submit" value="Stwórz wykres dla określonej daty">
            </form>
        </div>

<?php
    include_once 'footer.php';
?>
