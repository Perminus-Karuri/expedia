<?php
    require_once 'db.php';

    class flightclasses extends db {

        function saveflightclasses($flightclassesid, $flightid, $bookingclassid, $noofseats, $unitprice, $currencyid) {
            $sql = "CALL `sp_saveflightclasses`({$flightclassesid}, {$flightid}, {$bookingclassid}, {$noofseats}, {$unitprice}, {$currencyid})";
            $this->getData($sql);
            return ["status"=>"success", "message"=>"Flight class stored successfully"];
        }

        function getflightclasses() {
            $sql = "CALL `sp_getflightclasses`()";
            return $this->getJSON($sql);
        }

        function deleteflightclasses($flightclassesid) {
            $sql = "CALL `sp_deleteflightclasses`({$flightclassesid})";
            $this->getData($sql);
            return ["status"=>"success", "message"=>"Flight class deleted successfully"];
        }
    }
?>