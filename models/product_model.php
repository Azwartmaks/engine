<?php

class Product_Model extends Model{
    
    function getSubProducts($parent_product){
        $result = $this->prepare("SELECT * FROM `ptype` WHERE `parent_id`=:parentId");
        $result->execute(array(":parentId"=>$parent_product['id']));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

