<?php

class MP extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index($makeData,$productdata){
        $makeData=$makeData[0];
        $productTable = $productdata['rel_table'];
        $this->view->varToTemp("models", $this->model->getModels($makeData['makeid'],$productTable));
        $this->MPData = $this->model->MPData($productdata['id']);
        $this->view->varToTemp('products', $this->model->getAllParentProducts());
        $this->view->varToTemp('makes', $this->model->allMakes());
        $this->view->varToTemp('productUrl',$productdata['alias']);
        $this->view->varToTemp('productname',$productdata['name']);
        $this->view->varToTemp('make',$makeData['make']);
        
        $this->view->varToTemp("title",preg_replace('/\[make\]/',str_replace('-',' ',ucwords($makeData['make'])),  $this->MPData[0]['title']));
        $this->view->varToTemp('description', preg_replace('/\[make\]/',$makeData['make'],  $this->MPData[0]['meta_description']));
        $this->view->varToTemp('keywords', preg_replace('/\[make\]/',$makeData['make'],  $this->MPData[0]['meta_keywords']));
        $this->view->varToTemp('header', preg_replace('/\[make\]/',str_replace('-',' ',ucwords($makeData['make'])),  $this->MPData[0]['header']));
        $this->view->varToTemp('text', preg_replace('/\[make\]/',str_replace('-',' ',ucwords($makeData['make'])),  $this->MPData[0]['text']));
        
        $this->view->render('mp');
    }
}

