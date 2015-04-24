<?php

class MMYP_MODEL extends Model{
    /*is make from URL available*/

    function checkPY($modelid,$year,$relationTable){
        $result = mysql_query("SELECT * FROM `{$relationTable}` WHERE `modelid` = {$modelid} AND `year`={$year}");
        $result = $this->assocRowResult($result);
        return $result;
    }
    function getYears($modelid,$relationTable){
        $years = mysql_query("SELECT * FROM `{$relationTable}` WHERE `modelid` = {$modelid}");
        $years = $this->assocAllResult($years);
        return $years;
    }
    
    function MMYPData($productId){
        $result = mysql_query("SELECT * FROM `ptype_mmy` WHERE `ptype_id` = $productId");
        $result = $this->assocRowResult($result);
        return $result;
    }
    
}