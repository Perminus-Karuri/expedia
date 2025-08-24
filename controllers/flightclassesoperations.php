<?php
    require_once("../models/flightclasses.php");

    $flightclasses = new flightclasses();

    if(isset($_POST['saveflightclasses'])) {
        $flightclassesid = $_POST['flightclassesid'];
        $flightid = $_POST['flightid'];
        $bookingclassid = $_POST['bookingclassid'];
        $noofseats = $_POST['noofseats'];
        $unitprice = $_POST['unitprice'];
        $currencyid = $_POST['currencyid'];

        $response = $flightclasses->saveflightclasses($flightclassesid, $flightid, $bookingclassid, $noofseats, $unitprice, $currencyid);
        echo json_encode($response);
    }

    if(isset($_GET['getflightclasses'])) {
        echo $flightclasses->getflightclasses();
    }

    if(isset($_POST['deleteflightclasses'])) {
        $flightclassesid = $_POST['flightclassesid'];

        $response = $flightclasses->deleteflightclasses($flightclassesid);
        echo json_encode($response);
    }
?>