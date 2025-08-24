<?php
    require_once("../models/flightbookingpassengers.php");

    $flightbookingpassengers = new flightbookingpassengers();

    if(isset($_POST['saveflightbookingpassengers'])) {
        $passengerbookingid = $_POST['passengerbookingid'];
        $bookingclassid = $_POST['bookingclassid'];
        $documentid = $_POST['documentid'];
        $firstname = $_POST['firstname'];
        $secondname = $_POST['secondname'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $DoB = $_POST['DoB'];

        $response = $flightbookingpassengers->saveflightbookingpassengers($passengerbookingid, $bookingclassid, $documentid, $firstname, $secondname, $surname, $gender, $DoB);
        echo json_encode($response);
    }

    if(isset($_GET['getflightbookingpassengers'])) {
        echo $flightbookingpassengers->getflightbookingpassengers();
    }

    if(isset($_POST['deleteflightbookingpassengers'])) {
        $passengerbookingid = $_POST['passengerbookingid'];

        $response = $flightbookingpassengers->deleteflightbookingpassengers($passengerbookingid);
        echo json_encode($response);
    }
?>