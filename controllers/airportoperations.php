<?php
    require_once("../models/airports.php");

    $airport = new airports();

    if(isset($_POST['saveairport'])) {
        $airportid = $_POST['airportid'];
        $airportcode = $_POST['airportcode'];
        $airportname = $_POST['airportname'];
        $cityid = $_POST['cityid'];

        $response = $airport->saveairport($airportid, $airportcode, $airportname, $cityid);
        echo json_encode($response);
    }

    if(isset($_GET['getairport'])) {
        echo $airport->getairport();
    }

    if(isset($_POST['deleteairport'])) {
        $airportid = $_POST['airportid'];

        $response = $airport->deleteairport($airportid);
        echo json_encode($response);
    }
?>