<?php
    require_once("../models/flights.php");

    $flight = new flights();

    if(isset($_POST['saveflights'])) {
        $flightid = $_POST['flightid'];
        $airlineid = $_POST['airlineid'];
        $flightname = $_POST['flightname'];
        $flightno = $_POST['flightno'];
        $departurecity = $_POST['departurecity'];
        $destinationcity = $_POST['destinationcity'];
        $duration = $_POST['duration'];
        $departuretime = $_POST['departuretime'];
        $departureairportid = $_POST['departureairportid'];
        $destinationairportid = $_POST['destinationairportid'];

        $response = $flight->saveflights($flightid, $airlineid, $flightname, $flightno, $departurecity, $destinationcity, $duration, $departureairportid, $destinationairportid);
        echo json_encode($response);
    }

    if(isset($_GET['getflights'])) {
        echo $flight->getflights();
    }

    if(isset($_POST['deleteflights'])) {
        $flightid = $_POST['flightid'];

        $response = $flight->deleteflights($flightid);
        echo json_encode($response);
    }
?>