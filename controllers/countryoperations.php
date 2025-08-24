<?php
    require_once("../models/country.php");

    $country = new country();

    // check what user is trying to do - save, get or delete a country
    if(isset($_POST['savecountry'])) {
        $countryid = $_POST['countryid'];
        $countryname = $_POST['countryname'];

        $response = $country->savecountry($countryid, $countryname);
        echo json_encode($response);
    }

    if(isset($_GET['getcountry'])) {
        echo $country->getcountry();
    }

    if(isset($_POST['deletecountry'])) {
        $countryid = $_POST['countryid'];
        
        $response = $country->deletecountry($countryid);
        echo json_encode($response);
    }
?>