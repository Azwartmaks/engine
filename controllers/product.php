<?php

class Product extends Controller{

    private $productName;

    function __construct() {
        parent::__construct();
    }
    function index($product){
        
        //$this->view->subProducts = $this->model->getSubProducts($product);
        $this->view->varToTemp('subProducts', $this->model->getSubProducts($product));
//        $this->view->makes = $this->model->allMakes();
        $this->view->varToTemp('makes', $this->model->allMakes());
//        $this->view->productUrl = $product['alias'];
        $this->view->varToTemp('productUrl',$product['alias']);
//        $this->view->product = $product['name'];
        $this->view->varToTemp('product',$product['name']);
//        $this->view->products = $this->model->getAllProducts();
        $this->view->varToTemp('products',$this->model->getAllProducts());
//        $this->view->title = $product['title'];
        $this->view->varToTemp('title',$product['title']);
//        $this->view->meta_desc=$product['meta_description'];
        $this->view->varToTemp('meta_description',$product['meta_description']);
//        $this->view->meta_key=$product['meta_keywords'];
        $this->view->varToTemp('meta_keywords',$product['meta_keywords']);
        
        $this->productName = $product['name'];
//        $this->view->header = $product['header'];
        $this->view->varToTemp('header',$product['header']);
//        $this->view->text = $product['text'];  
        $this->view->varToTemp('text',$product['text']);
        
        $this->parentId = $product['parent_id'];
        if($this->parentId==0){
        $this->view->breadcrumbs = "<a href='/'>Home</a>".
                "<span class='sep'><i class='fa fa-caret-right'></i></span>".
                ucwords($this->productName);
        }else{
            $this->parentProduct = $this->model->getProductById($this->parentId);
            $this->view->subtype = true;
            $this->view->breadcrumbs = "<a href='/'>Home</a>".
                "<span class='sep'><i class='fa fa-caret-right'></i></span>".
                "<a href='{$this->parentProduct['alias']}.html'>".ucwords($this->parentProduct['name'])."</a>".
                "<span class='sep'><i class='fa fa-caret-right'></i></span>".        
                ucwords($this->productName);
        }
        $this->view->render('product');
    }
}
