<?php

class MMP extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index($makeData,$modelData,$productdata){
        $productTable = $productdata['rel_table'];
        $this->MMPData = $this->model->MMPData($productdata['id']);
        $this->view->varToTemp('products', $this->model->getAllParentProducts());
        $this->view->varToTemp('makes', $this->model->allMakes());
        $this->view->varToTemp('years',$this->model->getYears($modelData['modelid'],$productTable));
        $this->view->varToTemp('models', $this->model->getModels($makeData['makeid'],$productTable));
        $this->view->varToTemp('productname',$productdata['name']);
        $this->view->varToTemp('productUrl', $productdata['alias']);
        $this->view->varToTemp('make', $makeData['make']);
        $this->view->varToTemp('model', $modelData['model']);
        $this->MakeModelRelation = $this->model->checkMM($makeData['makeid'],$modelData['modelid']);

        if($this->MakeModelRelation){
            $this->view->varToTemp('title',preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['title']));
            $this->view->varToTemp('description', preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['meta_description']));
            $this->view->varToTemp('keywords', preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['meta_keywords']));
            $this->view->varToTemp('header', preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['header']));
            $this->view->varToTemp('text', preg_replace(array('/\[make\]/','/\[model\]/'),array(ucwords(str_replace('-',' ',$makeData['make'])),$modelData['model']),  $this->MMPData['text'])); 
            $this->view->render('mmp');  
        }else{
            $this->view->varToTemp('title', "Wa are haven't information for your {$makeData['make']} {$modelData['model']}");
            $this->view->varToTemp('description', "Wa are haven't information for your {$makeData['make']} {$modelData['model']}");
            $this->view->varToTemp('keywords', "Wa are haven't information for your {$makeData['make']} {$modelData['model']}");
            $this->view->varTotemp('header', "Wa are haven't information for your {$makeData['make']} {$modelData['model']}");
            $this->view->varToTemp('text',"Wa are haven't information for your {$makeData['make']} {$modelData['model']}");
            $this->view->render('mmp_error');  
        }
        
    }
}

