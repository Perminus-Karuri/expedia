<?php
    require_once 'db.php';

    class flights extends db {

        function saveflights($flightid, $airlineid, $flightname, $flightno, $departurecity, $destinationcity, $duration, $departureairportid, $destinationairportid) {
            $sql = "CALL `sp_saveflights`({$flightid}, {$airlineid}, '{$flightname}', '{$flightno}', '{$departurecity}', '{$destinationcity}', {$duration}, {$departuretime}, {$departureairportid}, {$destinationairportid})";
            $this->getData($sql);
            return ["status"=>"success", "message"=>"Flight stored successfully"];
        }

        function getflights() {
            $sql = "CALL `sp_getflights`()";
            return $this->getJSON($sql);
        }

        function deleteflights($flightid) {
            $sql = "CALL `sp_deleteflights`({$flightid})";
            $this->getData($sql);
            return ["status"=>"success", "message"=>"Flight deleted successfully"];
        }
    }
?>