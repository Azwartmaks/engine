<?php

class Admin extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    function is_login(){
        if($_SESSION['login']==null){
            header("Location:admin-login.html");
        }
    }
    function login(){
        $this->adminview->render('login',true);
    }
    function index(){
        $this->adminview->tables = $this->model->allTables();
//        var_dump($this->model->allTables());
        $this->adminview->render('index');
    }
    function autorize(){
        $result = $this->model->autorization();
        if(!$result){
            header("Location:admin-login.html");
        }else{
            header("Location:admin.html");
        }
    }
    /*PTYPE functionality *****************************************************/
    function products(){
        $this->is_login();
        $this->adminview->ptypes = $this->model->getProducts();
        $this->adminview->ptypesmmy = $this->model->getMMY();
        $this->adminview->ptypesmm = $this->model->getMM();
        $this->adminview->ptypesm = $this->model->getM();
        $this->adminview->render('products');
    }
    function addProduct(){
        $this->is_login();
        $this->adminview->productsData = $this->model->getProducts();
        $this->adminview->render('addproduct');
    }
    
    function deleteProduct($ptype_id){
        $this->is_login();        
        $this->model->deleteProduct($ptype_id);
    }
    
    function saveProduct(){
        $this->is_login();        
        
        $uploadfile = "views/images/products/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->saveProduct();
    }
    
    function editProduct($param){
        $this->adminview->productsData = $this->model->getProducts();
        $this->adminview->productData = $this->model->getProductData($param);
        $this->adminview->render('editproduct');
    }
    
    function updateProduct($ptype_id){
        $this->is_login();        
        
        $uploadfile = "views/images/products/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->updateProduct($ptype_id);
    }  
    
    /*PTYPE MMY Functionality**************************************************/
//    function productsMMY(){
//        $this->is_login();
//        $this->adminview->ptypesmmy = $this->model->getMMY();
//        $this->adminview->render('productsMMY');
//    }
    
    function addProductMMY(){
        $this->is_login();
        $this->adminview->tablename = "MMY";
        $this->adminview->products = $this->model->getProducts();
        $this->adminview->render('addproductmmy');
    }
    
    function deleteProductMMY($ptype_id){
        $this->is_login();        
        $this->model->deleteProductMMY('ptype_mmy',$ptype_id);
    }
    
    function saveProductMMY(){
        $this->is_login();        
        
        $uploadfile = "views/images/productsmmy/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->saveProductMMY('ptype_mmy');
    }
    
    function editProductMMY($param){
        $this->adminview->formAction = 'updateproductmmy';
        $this->adminview->tablename = "MMY";
        $this->adminview->products = $this->model->getProducts();        
        $this->productData = $this->model->getProductMMYData('ptype_mmy',$param);
        $this->adminview->productData = $this->productData[0];
        $this->adminview->render('editproductmmy');
    }
    
    function updateProductMMY($id){
        $this->is_login();        
        
        $uploadfile = "views/images/productsmmy/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->updateProductMMY('ptype_mmy',$id);
    }  
    

    /*MM Products functionality***********************************************/
    function addProductMM(){
        $this->is_login();
        $this->adminview->tablename = "MM";
        $this->adminview->products = $this->model->getProducts();
        $this->adminview->render('addproductmmy');
    }
    
    function deleteProductMM($ptype_id){
        $this->is_login();        
        $this->model->deleteProductMMY('ptype_mm',$ptype_id);
    }
    
    function saveProductMM(){
        $this->is_login();        
        
        $uploadfile = "views/images/productsmm/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->saveProductMMY('ptype_mm');
    }
    
    function editProductMM($param){
        $this->is_login();
        $this->adminview->products = $this->model->getProducts();
        $this->productData = $this->model->getProductMMYData('ptype_mm',$param);
        $this->adminview->productData = $this->productData[0];
        $this->adminview->formAction = 'updateproductmm';
        $this->adminview->tablename = "MM";
        $this->adminview->render('editproductmmy');
    }
    
    function updateProductMM($id){
        $this->is_login();        
        
        $uploadfile = "views/images/productsmm/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->updateProductMMY('ptype_mm',$id);
    }
    
    /*M(Make) Products functionality***********************************************/
    function addProductM(){
        $this->is_login();
        $this->adminview->tablename = "M";
        $this->adminview->products = $this->model->getProducts();
        $this->adminview->render('addproductmmy');
    }
    
    function deleteProductM($ptype_id){
        $this->is_login();        
        $this->model->deleteProductMMY('ptype_m',$ptype_id);
    }
    
    function saveProductM(){
        $this->is_login();        
        
        $uploadfile = "views/images/productsm/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->saveProductMMY('ptype_m');
    }
    
    function editProductM($param){
        $this->is_login();
        $this->adminview->products = $this->model->getProducts();
        $this->adminview->formAction = 'updateproductm';
        $this->adminview->tablename = "M";
        $this->productData = $this->model->getProductMMYData('ptype_m',$param);
        $this->adminview->productData = $this->productData[0];
        $this->adminview->render('editproductmmy');
    }
    
    function updateProductM($id){
        $this->is_login();        
        
        $uploadfile = "views/images/productsm/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;
        $this->model->updateProductMMY('ptype_m',$id);
    }
    
    function brands(){
        $this->is_login();
        $this->adminview->allBrands = $this->model->getBrands();
        $this->adminview->render('brands');
    }
    
    function addBrand(){
        $this->is_login();
        $this->adminview->render('addBrand');
    }
    function saveBrand(){
        $this->is_login();
        
        $uploadfile = "views/images/brand/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;  
        $this->model->saveBrand();
    }
    
    function editBrand($brand_id){
        $this->is_login();
        
        $this->brandData = $this->model->getBrandData($brand_id);
        $this->adminview->brandData=$this->brandData;
        
        $this->adminview->imgsrc = json_decode($this->brandData[0]['img_src']);
        $this->adminview->alt = json_decode($this->brandData[0]['alt']);
        $this->adminview->theme = json_decode($this->brandData[0]['theme']);
        $this->adminview->render('editBrand');
    }
    
    function updateBrand($brand_id){
        $this->is_login();
        
        $uploadfile = "views/images/brand/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;  
        $this->model->updateBrand($brand_id);
    }
    
    function deleteBrand($brand_id){
        $this->is_login();
        $this->model->deleteBrand($brand_id);
    }
    
    function articles(){
        $this->is_login();
        $this->adminview->allArticles = $this->model->getArticles();
        $this->adminview->render('articles');
    }
    
    function addArticle(){
        $this->is_login();
        $this->adminview->render('addArticle');
    }
    
    function saveArticle(){
        $this->is_login();
        
        $uploadfile = "views/images/article/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;  
        $this->model->saveArticle();
    }
    
    function editArticle($article_id){
        $this->is_login();
        
        $this->articleData = $this->model->getArticleData($article_id);
        $this->adminview->articleData=$this->articleData;
        $this->adminview->imgsrc = json_decode($this->articleData[0]['img_src']);
        $this->adminview->alt = json_decode($this->articleData[0]['alt']);
        $this->adminview->theme = json_decode($this->articleData[0]['theme']);
        $this->adminview->render('editArticle');
    }
    
    function updateArticle($article_id){
        $this->is_login();
        
        $uploadfile = "views/images/article/".$_FILES["pic"]["name"];
        if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
            move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
        }else{
            $uploadfile="";
        }
        $_POST['pic']=$uploadfile;  
        $this->model->updateArticle($article_id);
    }
    
    function deleteArticle($article_id){
        $this->is_login();
        $this->model->deleteArticle($article_id);
    }
}