<?php
    require_once("../models/bookingclass.php");

    $bookingclass = new bookingclass();

    if(isset($_POST['savebookingclass'])) {
        $bookingclassid = $_POST['bookingclassid'];
        $classname = $_POST['classname'];

        $response = $bookingclass->savebookingclass($bookingclassid, $classname);
        echo json_encode($response);
    }

   if(isset($_GET['getbookingclass'])) {
        echo $bookingclass->getbookingclass();
    }

    if(isset($_POST['deletebookingclass'])) {
        $bookingclassid = $_POST['bookingclassid'];

        $response = $bookingclass->deletebookingclass($bookingclassid);
        echo json_encode($response);
    }
?>