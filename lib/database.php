<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database extends PDO{
    
    function __construct(){
        parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB, DB_USER, DB_PASSWD, array(
            //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));
    }
    
    function allTables(){
        $table_list = array();
        $sth = $this->prepare("SHOW TABLES FROM `".DB."`");
        $sth->execute();
        while($row =  $sth->fetchAll(PDO::FETCH_BOTH)){
            $table_list[]=$row;
        }
        return $table_list;
    }
 
    function allMakes(){
        $result = $this->prepare("SELECT `makeid`,`make` FROM `make`");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function allModels(){
        $result = $this->prepare("SELECT `modelid`,`model` FROM `model`");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }   
    
    function checkProduct($url){         
        $result = $this->prepare("SELECT `id` FROM `ptype` WHERE `alias`=:alias");
        $result->execute(array(':alias'=>$url));        
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function checkMake($make){
        $make = str_replace('-', ' ', $make);
        $result = $this->prepare("SELECT `makeid`,`make` FROM `make` WHERE `make`=:make");
        $result->execute(array(":make"=>$make));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
            
    function checkModel($model){
        $result = $this->prepare("SELECT `modelid`,`model` FROM `model` WHERE `model`=:model");
        $result->execute(array(":model"=>$model));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
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
        $result = $this->prepare("SELECT * FROM `model` WHERE `modelid`=:modelid and `makeid`=:makeid");
        $result->execute(array(":modelid"=>$modelid,":makeid"=>$makeid));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function selectFromTable($tablename){
        $result = $this->prepare("SELECT * FROM `{$tablename}`");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function getAllProducts(){
        $result = $this->selectFromTable('ptype');
        return $result;
    }
    
    function getAllParentProducts(){
        $result = $this->prepare("SELECT * FROM `ptype` WHERE `parent_id`=0 AND type='product'");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); 
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
        $result = $this->prepare("SELECT * FROM `ptype` WHERE id=:parentid");
        $result->execute(array(":parentid"=>$parentid));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function getProductById($id){
        $result = $this->prepare("SELECT * FROM `ptype` WHERE id=:id");
        $result->execute(array(":id"=>$id));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
}