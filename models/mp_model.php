<?php

class MP_MODEL extends Model{
    
    function getModels($makeid,$relationTable){
           
        $models = mysql_query("SELECT DISTINCT ML.`modelid` , ML.`model` 
            FROM  `{$relationTable}` WK
            LEFT JOIN  `model` ML ON ML.`modelid` = WK.`modelid` 
            WHERE ML.`makeid` = {$makeid}");
        $models = $this->assocAllResult($models);
        return $models;
    }
    
    function MPData($productId){
        $result = mysql_query("SELECT * FROM `ptype_m` WHERE `ptype_id` = $productId");
        $result = $this->assocRowResult($result);
        return $result;
    }
}
