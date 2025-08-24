<?php
    require_once("../models/airline.php");

    $airline = new airlines();

    if(isset($_POST['saveairline'])) {
        $airlineid = $_POST['airlineid'];
        $airlinename = $_POST['airlinename'];
        $airlinelogo = $_POST['airlinelogo'];
        $airportid = $_POST['airportid'];

        $response = $airline->saveairline($airlineid, $airlinename, $airlinelogo, $airportid);
        echo json_encode($response);
    }

    if(isset($_GET['getairline'])) {
        echo $airline->getairline();
    }

    if(isset($_POST['deleteairline'])) {
        $airlineid = $_POST['airlineid'];

        $response = $airline->deleteairline($airlineid);
        echo json_encode($response);
    }
?>