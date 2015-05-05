<?php

class MMYP extends Controller {
    
    function __construct() {
        parent::__construct();          
    }
    
    function index($makeData,$modelData,$year,$productdata){
        
        $productTable = $productdata['rel_table'];
        $this->MMYPData = $this->model->MMYPData($productdata['id']);
        $this->view->varToTemp('products', $this->model->getAllParentProducts());
        $this->view->varToTemp('makes', $this->model->allMakes());
        $this->view->varToTemp('models', $this->model->getModels($makeData['makeid'],$productTable));
        $this->view->varToTemp('years', $this->model->getYears($modelData['modelid'],$productTable));
        $this->view->varToTemp('productname', $productdata['name']);
        $this->view->varToTemp('productUrl', $productdata['alias']);
        $this->view->varToTemp('make', $makeData['make']);
        $this->view->varToTemp('model',$modelData['model']);
        $this->view->varToTemp('cur_year',$year);
        
        $this->ProductYearRelation = $this->model->checkPY($modelData['modelid'],$year,$productTable);
        $this->MakeModelRelation = $this->model->checkMM($makeData['makeid'],$modelData['modelid']);  
        
        if($this->MakeModelRelation && $this->ProductYearRelation){
            $this->view->varToTemp('title', preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['title']));
            $this->view->varToTemp('description', preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['meta_description']));
            $this->view->varToTemp('keywords', preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['meta_keywords']));
            $this->view->varToTemp('header', preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['header']));
            $this->view->varToTemp('text', preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['text']));
            $this->view->render("mmyp");
        }else{
            $this->view->varToTemp('ProductYearRelation',$this->ProductYearRelation);
            $this->view->varToTemp('title', "No data for your's $year {$makeData['make']} {$modelData['model']}");
            $this->view->varToTemp('description', '');
            $this->view->varToTemp('keywords','');
            $this->view->varToTemp('header',"$year {$makeData['make']} {$modelData['model']} {$productdata['name']}");
            $this->view->varToTemp('text',"No data for your's $year {$makeData['make']} {$modelData['model']}");            
            $this->view->render("mmyp_error");
        }        
    }    
}