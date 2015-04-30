<?php

class MMYP_MODEL extends Model{
    /*is make from URL available*/
    
    function getModels($makeid,$relationTable){
        $result = $this->prepare("SELECT DISTINCT ML.`modelid` , ML.`model` 
            FROM  `{$relationTable}` WK
            LEFT JOIN  `model` ML ON ML.`modelid` = WK.`modelid` 
            WHERE ML.`makeid` = :makeid");
        $result->execute(array(":makeid"=>$makeid));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function checkPY($modelid,$year,$relationTable){
        $result = $this->prepare("SELECT * FROM `{$relationTable}` WHERE `modelid` = :modelid AND `year`=:year");
        $result->execute(array(":modelid"=>$modelid, ":year"=>$year));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function getYears($modelid,$relationTable){
        $result = $this->prepare("SELECT * FROM `{$relationTable}` WHERE `modelid` = :modelid");
        $result->execute(array(":modelid"=>$modelid));
        return $result->fetchAll(PDO::FETCH_ASSOC);               
    }
    
    function MMYPData($productId){
        $result = $this->prepare("SELECT * FROM `ptype_mmy` WHERE `ptype_id` = :productId");
        $result->execute(array(":productId"=>$productId));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
}