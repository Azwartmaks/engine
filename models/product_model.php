<?php

class Product_Model extends Model{
    
    function getSubProducts($parent_product){
        $result = mysql_query("SELECT * FROM `ptype` WHERE `parent_id`={$parent_product['id']}");
        $subproducts = $this->assocAllResult($result);
        return $subproducts;
    }
}

