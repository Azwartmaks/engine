<?php

class MP_MODEL extends Model{
    
    function getModels($makeid,$relationTable){
        $result = $this->prepare("SELECT DISTINCT ML.`modelid` , ML.`model` 
            FROM  `{$relationTable}` WK
            LEFT JOIN  `model` ML ON ML.`modelid` = WK.`modelid` 
            WHERE ML.`makeid` = :makeid");
        $result->execute(array(":makeid"=>$makeid));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function MPData($productId){
        $result = $this->prepare("SELECT * FROM `ptype_m` WHERE `ptype_id` = :productId");
        $result->execute(array(":productId"=>$productId));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
