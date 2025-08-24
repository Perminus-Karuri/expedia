<?php
    require_once("../models/paymentmethod.php");

    $paymentmethod = new paymentmethod();

    if(isset($_POST['savepaymentmethod'])) {
        $methodid = $_POST['methodid'];
        $methodname = $_POST['methodname'];

        $response = $paymentmethod->savepaymentmethod($methodid, $methodname);
        echo json_encode($response);
    }

    if(isset($_GET['getpaymentmethod'])) {
        echo $paymentmethod->getpaymentmethod();
    }

    if(isset($_POST['deletepaymentmethod'])) {
        $methodid = $_POST['methodid'];

        $response = $paymentmethod->deletepaymentmethod($methodid);
        echo json_encode($response);
    }
?>