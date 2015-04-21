<?php

class MMP_MODEL extends Model{
    
    function getModels($makeid,$relationTable){
           
        $models = mysql_query("SELECT DISTINCT ML.`modelid` , ML.`model` 
            FROM  `{$relationTable}` WK
            LEFT JOIN  `model` ML ON ML.`modelid` = WK.`modelid` 
            WHERE ML.`makeid` = {$makeid}");
        $models = $this->assocAllResult($models);
        return $models;
    }
    function getYears($modelid,$relationTable){
        $years = mysql_query("SELECT * FROM `{$relationTable}` WHERE `modelid` = {$modelid}");
        $years = $this->assocAllResult($years);
        return $years;
    }
    function MMPData($productId){
        $result = mysql_query("SELECT * FROM `ptype_mm` WHERE `ptype_id` = $productId");
        $result = $this->assocRowResult($result);
        return $result;
    }
}

