<?php
    require_once 'db.php';

    class airlines extends db {

        function saveairline($airlineid, $airlinename, $airlinelogo, $airportid) {
            $sql = "CALL `sp_saveairline`({$airlineid}, '{$airlinename}', '{$airlinelogo}', {$airportid})";
            $this->getdata($sql);
            return ["status"=>"success", "message"=>"Airline stored successfully"];
        }

        function getairline() {
            $sql = "CALL `sp_getairline`()";
            return $this->getJSON($sql);
        }

        function deleteairline($airlineid) {
            $sql = "CALL `sp_deleteairline`({$airlineid})";
            $this->getdata($sql);
            return ["status"=>"success", "message"=>"Airline deleted successfully"];
        }
    }
?>