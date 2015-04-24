<?php

class MMYP extends Controller {
    
    function __construct() {
        parent::__construct();          
    }
    
    function index($makeData,$modelData,$year,$productdata){
        
        $productTable = $productdata['rel_table'];
        $this->MMYPData = $this->model->MMYPData($productdata['id']);
        $this->view->products = $this->model->getAllParentProducts();
        
        $this->view->years = $this->model->getYears($modelData['modelid'],$productTable);
        $this->view->product = $productdata['name'];
        $this->view->productUrl = $productdata['alias'];
        $this->view->make = $makeData['make'];
        $this->view->model = $modelData['model'];
        
        $this->ProductYearRelation = $this->model->checkPY($modelData['modelid'],$year,$productTable);
        $this->MakeModelRelation = $this->model->checkMM($makeData['makeid'],$modelData['modelid']);  
        
        if($this->MakeModelRelation && $this->ProductYearRelation){
            $this->view->title = preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['title']);
            $this->view->description = preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['meta_description']);
            $this->view->keywords = preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['meta_keywords']);
            $this->view->header = preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['header']);
            $this->view->text = preg_replace(array('/\[make\]/','/\[model\]/','/\[year\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model'],$year),  $this->MMYPData['text']);
            $this->view->render("mmyp");
        }else{
            $this->view->ProductYearRelation = $this->ProductYearRelation;
            $this->view->title = "No data for your's $year {$makeData['make']} {$modelData['model']}";
            $this->view->description = '';
            $this->view->keywords = '';
            $this->view->header = "$year {$makeData['make']} {$modelData['model']} {$productdata['name']}";
            $this->view->text = "No data for your's $year {$makeData['make']} {$modelData['model']}";            
            $this->view->render("mmyp_error");
        }        
    }    
}