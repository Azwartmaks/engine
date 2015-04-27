<?php

class Product extends Controller{

    private $productName;

    function __construct() {
        parent::__construct();
    }
    function index($product){
        
        $this->view->varToTemp('subProducts', $this->model->getSubProducts($product));
        $this->view->varToTemp('makes', $this->model->allMakes());
        $this->view->varToTemp('productUrl',$product['alias']);
        $this->view->varToTemp('productname',$product['name']);
        $this->view->varToTemp('products',$this->model->getAllProducts());
        $this->view->varToTemp('title',$product['title']);
        $this->view->varToTemp('meta_description',$product['meta_description']);
        $this->view->varToTemp('meta_keywords',$product['meta_keywords']);
        
        $this->productName = $product['name'];
        
        $this->view->varToTemp('subtype',false);
        $this->view->varToTemp('header',$product['header']);
        $this->view->varToTemp('text',$product['text']);
        $this->view->varToTemp('parentId',$product['parent_id']);
        if($product['parent_id']!=0){
            $this->view->varToTemp('subtype',true);
            $this->view->varToTemp('parentProduct',$this->model->getProductById($product['parent_id']));
        }
        $this->view->render('product');
    }
}
