<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database{
    
    function __construct(){
        $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWD)or die(mysql_errno());
        $db = mysql_select_db(DB)or die(mysql_errno());
    }
    
    function allTables(){
        $table_list = array();
        $result = mysql_query("SHOW TABLES FROM `".DB."`");
        while($row =  mysql_fetch_array($result)){
            $table_list[]=$row;
        }
        return $table_list;
    }
    
    function checkTable($name){
        $name = str_replace('-', '_', $name);
        $result = false;
        foreach ($this->allTables() as $value){
            if($value[0]==$name){
                $result = true;
            }
        }
        return $result;
    }
    
    function assocRowResult($mysqlres){
        $row =  mysql_fetch_assoc($mysqlres);
        return $row;
    }
    
    function assocAllResult($mysqlres){
        $rows_arr = array();
        while ($row = mysql_fetch_assoc($mysqlres)){
            $rows_arr[]=$row;
        }
        return $rows_arr;
    }
    
    function allMakes(){
        $result = mysql_query("SELECT `makeid`,`make` FROM `make`");
        $result = $this->assocAllResult($result);
        return $result;
    }

    function allModels(){
        $result = mysql_query("SELECT `modelid`,`model` FROM `model`");
        $result = $this->assocAllResult($result);
        return $result;
    }   
    function checkProduct($url){         
        $result = mysql_query("SELECT `id` FROM `ptype` WHERE `alias`='{$url}'");
        $result = $this->assocRowResult($result);
        return $result;
    }
    function checkMake($make){
        $make = str_replace('-', ' ', $make);
        $result = mysql_query("SELECT `makeid`,`make` FROM `make` WHERE `make`='{$make}'");
        $result = $this->assocRowResult($result);
        return $result;   
    }
            
    function checkModel($model){
        $result = mysql_query("SELECT `modelid` FROM `model` WHERE `model`='{$model}'");
        $result = $this->assocRowResult($result);
        return $result;
    }
    
    function getMake($urlpart,$urlpart2=null){
        $result['res'] = false;
        $result['part'] = false;
        if($urlpart2==null){            
            $make = $this->checkMake($urlpart);
            if($make!=null){
                $result['make'] = $make;
                $result['res'] = true;
            }
        }elseif($urlpart2!=null){
            $makes = $this->allMakes();
            $urlpart2 = explode('-', $urlpart2);
            $urlpart2=$urlpart2[0];
            foreach ($makes as $make){
                $dbmake = str_replace(' ', '-', $make['make']);                
                if(count(explode('-',$dbmake))>0){
                    preg_match("/^{$dbmake}$/", $urlpart.'-'.$urlpart2,$matches);
                    if($matches[0]!=null && $matches[0]==$make['make']){
                        $result['make'] = $make;
                        $result['part'] = true;
                        $result['res'] = true;
                        break;
                    }
                }if(count(explode('-',$dbmake))>0){
                    preg_match("/^{$dbmake}$/", $urlpart,$matches);
                    if($matches[0]!=null && $matches[0]==$make['make']){
                        $result['make'] = $make;
                        $result['part'] = false;
                        $result['res'] = true;
                        break;
                    }
                }    
            }
        }
        return $result;        
    }
    
    function getModel($modelAlias,$makepart,$make){
        $result['error'] = false;
        $models = $this->allModels();
        $modelPart = explode('-', $modelAlias);

        foreach ($models as $model){
            preg_match("/(^|-){$model['model']}$/",$modelAlias,$matches);
            if(ltrim($matches[0],'-')==$model['model']){
                $result['model'] = $model;
                $result['error']=false;
                break;
            }else{
                $result['error']=true;
            }
        }
        preg_match("/{$modelAlias}$/", $make, $match);
        if($match[0]!=null && $makepart){
            $result['error'] = false;
        }
        return $result;
    }
    
    function checkMM($makeid,$modelid){
        $result = mysql_query("SELECT * FROM `model`"
                . "WHERE `modelid`= '$modelid' and `makeid`= '$makeid'");
        $result = $this->assocRowResult($result);       
        return $result;
    }
    
    function selectFromTable($tablename){
        $result = mysql_query("SELECT * FROM `{$tablename}`");
        $result = $this->assocAllResult($result);
        return $result;
    }
    
    function getAllProducts(){
        $result = $this->selectFromTable('ptype');
        return $result;
    }
    function getAllParentProducts(){
        $result = mysql_query("SELECT * FROM `ptype` WHERE `parent_id`=0");
        $result = $this->assocAllResult($result);
        return $result;
    }
    
    
    function productOnly(){
        $url = $_GET['url'];
        $products = $this->getAllProducts();
        $curproduct="";
        foreach ($products as $value){
            preg_match("/^{$value['alias']}$/", $url, $product);
            if(!empty($product) && $product[0]==$value['alias']){
                $curproduct=$value;
                break;
            }
        }
        return $curproduct;
    }
    
    function getProduct(){       
        $url = $_GET['url'];
        $products = $this->getAllProducts();
        $curproduct="";
        foreach ($products as $value){
            preg_match("/{$value['alias']}$/", $url, $product);
            if(!empty($product) && $product[0]==$value['alias']){
                $curproduct=$value;
                break;
            }
        }
        return $curproduct;
    }
    
    function getParent($parentid){
        $result = mysql_query("SELECT * FROM `ptype` WHERE id=$parentid");
        $result = $this->assocRowResult($result);
        return $result;
    }
    
    function getProductById($id){
        $result = mysql_query("SELECT * FROM `ptype` WHERE id=$id");
        $result = $this->assocRowResult($result);
        return $result;
    }
}