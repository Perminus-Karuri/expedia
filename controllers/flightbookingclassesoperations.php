<?php
    require_once("../models/flightbookingclasses.php");

    $flightbookingclasses = new flightbookingclasses();

    if(isset($_POST['saveflightbookingclasses'])) {
        $flightbookingclassid = $_POST['flightbookingclassid'];
        $bookingclassid = $_POST['bookingclassid'];
        $noofseats = $_POST['noofseats'];
        $unitprice = $_POST['unitprice'];
        $currencyid = $_POST['currencyid'];

        $response = $flightbookingclasses->saveflightbookingclasses($flightbookingclassid, $bookingclassid, $noofseats, $unitprice, $currencyid);
        echo json_encode($response);
    }

    if(isset($_GET['getflightbookingclasses'])) {
        echo $flightbookingclasses->getflightbookingclasses();
    }

    if(isset($_POST['deleteflightbookingclasses'])) {
        $flightbookingclassid = $_POST['flightbookingclassid'];

        $response = $flightbookingclasses->deleteflightbookingclasses($flightbookingclassid);
        echo json_encode($response);
    }
?>