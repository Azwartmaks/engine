<?php

class MMP extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index($makeData,$modelData,$productdata){
        $productTable = $productdata['rel_table'];
        $this->MMPData = $this->model->MMPData($productdata['id']);
        $this->view->products = $this->model->getAllParentProducts();
        
        $this->view->years = $this->model->getYears($modelData['modelid'],$productTable);
        $this->view->models = $this->model->getModels($makeData['makeid'],$productTable);
        $this->view->product = $productdata['name'];
        $this->view->productUrl = $productdata['alias'];
        $this->view->make = $makeData['make'];
        $this->view->model = $modelData['model'];
        $this->MakeModelRelation = $this->model->checkMM($makeData['makeid'],$modelData['modelid']);

        if($this->MakeModelRelation){
            $this->view->title = preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['title']);
            $this->view->description = preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['meta_description']);
            $this->view->keywords = preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['meta_keywords']);
            $this->view->header = preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['header']);
            $this->view->text = preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['text']); 
            $this->view->render('mmp');  
        }else{
            echo 12;
            $this->view->title = "Wa are haven't information for your {$makeData['make']} {$modelData['model']}";
            $this->view->description = "Wa are haven't information for your {$makeData['make']} {$modelData['model']}";
            $this->view->keywords = "Wa are haven't information for your {$makeData['make']} {$modelData['model']}";
            $this->view->header = "Wa are haven't information for your {$makeData['make']} {$modelData['model']}";
            $this->view->text = "Wa are haven't information for your {$makeData['make']} {$modelData['model']}";
            $this->view->render('mmp_error');  
        }
        
    }
}

