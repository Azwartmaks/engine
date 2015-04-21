<?php

class MP extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index($makeData,$productdata){
        $productTable = $productdata['rel_table'];
        $this->view->models = $this->model->getModels($makeData['makeid'],$productTable);
        $this->MPData = $this->model->MPData($productdata['id']);
        $this->view->products = $this->model->getAllParentProducts();
        $this->view->productUrl = $productdata['alias'];
        $this->view->make = $makeData['make'];
        
        $this->view->title = preg_replace('/\[make\]/',$makeData['make'],  $this->MPData['title']);
        $this->view->description = preg_replace('/\[make\]/',$makeData['make'],  $this->MPData['meta_description']);
        $this->view->keywords = preg_replace('/\[make\]/',$makeData['make'],  $this->MPData['meta_keywords']);
        $this->view->header = preg_replace('/\[make\]/',$makeData['make'],  $this->MPData['header']);
        $this->view->text = preg_replace('/\[make\]/',$makeData['make'],  $this->MPData['text']);
        
        $this->view->render('mp');
    }
}

