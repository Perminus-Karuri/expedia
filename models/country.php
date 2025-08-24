<?php
    require_once 'db.php'; // Include the database connection file

    class country extends db {
        
        function checkcountry($countryid, $countryname) {
            $sql = "CALL `sp_checkcountry`({$countryid}, '{$countryname}')";
            return $this->getData($sql)->rowCount();
        }

        function savecountry($countryid, $countryname) {
            if($this->checkcountry($countryid, $countryname)) {
                return ["status"=>"exists", "message"=>"country already exists"];

            } else {
                $sql = "CALL `sp_savecountry`({$countryid}, '{$countryname}')";
                $this->getData($sql); // to store something on the db while getJSON extract something and output it on the browser or rest api
                return ["status"=>"success", "message"=>"country stored successfully"];
            }           
        }

        function getcountry() {
            $sql = "CALL `sp_getcountry`()";
            return $this->getJSON($sql);
        }

        function deletecountry($countryid) {
            $sql = "CALL `sp_deletecountry`({$countryid})";
            $this->getData($sql); 
            return ["status"=>"success", "message"=>"country deleted successfully"];

        }
    }
?>