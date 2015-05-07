<?php

class Sitemap_Model extends Model{
    
    function getMmyProducts(){
        $sth = $this->prepare("SELECT * FROM `ptype` WHERE `type`='product' AND `parent_id`=0");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function getMakeModel(){
        $sth = $this->prepare("SELECT makeid,make FROM `make`");
        $sth->execute();
        $makes = $sth->fetchAll(PDO::FETCH_ASSOC);
        $response = array();
        $i=0;
        foreach ($makes as $make){
            
            $models = $this->getModels($make['makeid']);
            $modelsList = array();
            foreach ($models as $model){
                array_push($modelsList, $model['model']);
            }
            $response[$i] = array("make"=>$make['make'],"models"=>$modelsList);
            $i++;
        }
        return $response;
    }
    
    function getModels($make_id){
        $sth = $this->prepare("SELECT modelid,model FROM `model` WHERE `makeid`=:makeid");
        $sth->execute(array(':makeid'=>$make_id));
        return $sth->fetchAll(PDO::FETCH_ASSOC);  
    }
    
}

