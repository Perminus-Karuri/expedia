<?php
    require_once("../models/bookingtype.php");

    $bookingtype = new bookingtype();

    if(isset($_POST['savebookingtype'])) {
        $bookingtypeid = $_POST['bookingtypeid'];
        $typename = $_POST['typename'];

        $response = $bookingtype->savebookingtype($bookingtypeid, $typename);
        echo json_encode($response);
    }

    if(isset($_GET['getbookingtype'])) {
        echo $bookingtype->getbookingtype();
    }

    if(isset($_POST['deletebookingtype'])) {
        $bookingtypeid = $_POST['bookingtypeid'];

        $response = $bookingtype->deletebookingtype($bookingtypeid);
        echo json_encode($response);
    }
?>