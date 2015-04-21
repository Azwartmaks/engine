<?php

class Product extends Controller{

    private $productName;

    function __construct() {
        parent::__construct();
    }
    function index($product){
//        print preg_replace(
//            array("/(W|^)%make%(\s)/","/(\s)%model%/"),
//            array("Opel ", " omega"),
//            "%make% %model% "
//        );.
        
        $this->view->subProducts = $this->model->getSubProducts($product);
        $this->view->makes = $this->model->allMakes();
        $this->view->productUrl = $product['alias'];
        
        $this->view->product = $product['name'];
        $this->view->products = $this->model->getAllProducts();        
        $this->view->title = $product['title'];
        $this->view->meta_desc=$product['meta_description'];
        $this->view->meta_key=$product['meta_keywords'];
        $this->productName = $product['name'];
        $this->view->header = $product['header'];
        $this->view->text = $product['text'];  
        
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
