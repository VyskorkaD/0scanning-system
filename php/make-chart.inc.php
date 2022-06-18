<?php
require_once ('../jpgraph-4.4.1/src/jpgraph.php');
require_once ('../jpgraph-4.4.1/src/jpgraph_bar.php');
require_once 'dbh.inc.php';

$day = $_POST["date"];

function getData ($day, $conn) {
    $sql = "SELECT * FROM dayliraports WHERE day = \"$day\";";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $records = $result->fetch_all();
    $buses = array();
    $quantity = array();
    foreach ($records as $record) {
        array_push($buses, $record[1]);
        array_push($quantity, $record[3]);
    }
    $series1 = $buses;
    $series2 = $quantity;

    $graph = new Graph(1000, 500);
    $graph->ClearTheme();
    $graph->SetScale("textint");
    $graph->title->Set('Autobusy');
    $graph->xaxis->title->Set('(linia)');
    $graph->xaxis->SetTickLabels($buses);
    $graph->yaxis->title->Set('(Skanowania');
    $graph->yaxis->SetTitleMargin(70);
    $graph->xaxis->SetTitleMargin(40);
    $graph->img->SetMargin(100, 20, 50, 80);
    $barplot=new BarPlot($quantity);
    $graph->Add($barplot);
    $graph->Stroke();
}



getData($day, $conn);
