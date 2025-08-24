<?php
    require_once 'db.php';

    class currency extends db {

        function savecurrency($currencyid, $currencyname, $countryid) {
            $sql = "CALL `sp_savecurrency`({$currencyid}, '{$currencyname}', {$countryid})";
            $this->getData($sql);
            return ["status"=>"success", "message"=>"Currency stored successfully"];
        }

        function getcurrency() {
            $sql = "CALL `sp_getcurrency`()";
            return $this->getJSON($sql);
        }

        function deletecurrency($currencyid) {
            $sql = "CALL `sp_deletecurrency`({$currencyid})";
            $this->getData($sql);
            return ["status"=>"success", "message"=>"Currency deleted successfully"];
        }
    }
?>