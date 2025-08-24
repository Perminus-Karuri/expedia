<?php
    require_once("../models/traveldocs.php");

    $traveldocs = new traveldocs();

    if(isset($_POST['savetraveldocs'])) {
        $documentid = $_POST['documentid'];
        $documentname = $_POST['documentname'];
        $documentexpires = $_POST['documentexpires'];

        $response = $traveldocs->savetraveldocs($documentid, $documentname, $documentexpires);
        echo json_encode($response);
    }

    if(isset($_GET['gettraveldocs'])) {
        echo $traveldocs->gettraveldocs();
    }

    if(isset($_POST['deletetraveldocs'])) {
        $documentid = $_POST['documentid'];

        $response = $traveldocs->deletetraveldocs($documentid);
        echo json_encode($response);
    }
?>