<?php
    require_once("../models/currency.php");

    $currency = new currency();

    if(isset($_POST['savecurrency'])) {
        $currencyid = $_POST['currencyid'];
        $currencyname = $_POST['currencyname'];
        $countryid = $_POST['countryid'];

        $response = $currency->savecurrency($currencyid, $currencyname, $countryid);
        echo json_encode($response);
    }

    if(isset($_GET['getcurrency'])) {
        echo $currency->getcurrency();
    }

    if(isset($_POST['deletecurrency'])) {
        $currencyid = $_POST['currencyid'];

        $response = $currency->deletecurrency($currencyid);
        echo json_encode($response);
    }
?>