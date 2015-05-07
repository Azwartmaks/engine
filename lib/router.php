<?php

class Router{
    
    function __construct() {
        $dbsth = new Database();
        $url = $_GET['url'];        
        $products = $dbsth->getAllProducts();
        $current_product = "";

/*Link Patterns ***************************************************************/  
        $productalias = $url;
        preg_match("/admin/", $url, $admurl);
        foreach($products as $value){
            preg_match("/^([0-9]+)-([a-z]+)-(.*)-{$value['alias']}$/", $url, $mmyp);
            preg_match("/^([a-z]+)-(.*)-{$value['alias']}$/", $url, $mmp);
            preg_match("/^([a-z]+)-{$value['alias']}$/", $url, $mp);
            if(!empty($mmyp) || !empty($mmp) || !empty($mp)){
                $current_product = $value['alias'];
                break;                
            }
        }
        
/*Route queries to controllers ************************************************/        
        if(!empty($admurl)){ // Admin panel
            
            $url = explode('-', $url);
            require 'controllers/'.$url[0].'.php';
            $controller = new $url[0]();
            $controller->loadModel($url[0].'_model');
            if($url[2]!=null){
                if(method_exists($url[0], $url[1])){
                    $controller->$url[1]($url[2]);
                }
            }elseif($url[1]!=null){
                if(method_exists($url[0], $url[1])){
                    $controller->$url[1]();
                }
            }else{
                $controller->index();
            }
            
        }elseif($dbsth->checkProduct($productalias)!=null){ // show only product page

            require 'controllers/product.php';
            $controller = new Product();
            $controller->loadModel('product_model');
            $product = $controller->model->productOnly();
            $controller->index($product);
            
        }elseif(!empty($mp)){ //show when was choice any make
            $ismake = $dbsth->getMake($mp[1]);
           
            if($ismake['res']){
                
                require 'controllers/mp.php';            
                $controller = new MP();
                $controller->loadModel('mp_model');
                $product = $controller->model->getProduct();                
                $controller->index($ismake['make'],$product);
                
            }else{
                new Error();
            } 
            
        }elseif(!empty($mmp)){ //show when was choice any make and model
            $ismake = $dbsth->getMake($mmp[1], $mmp[2]); 
            $make = $ismake['make']['make'];
            $ismodel = $dbsth->getModel($mmp[2],$ismake['part'],$make);
           
            if($ismake['res'] && $ismodel['model']== null && !$ismodel['error']){ //when make have two words
                
                require 'controllers/mp.php';            
                $controller = new MP();
                $controller->loadModel('mp_model');
                $product = $controller->model->getProduct();            
                $controller->index($ismake['make'],$product);       
                
            }elseif($ismake['res'] && $ismodel['model']!= null && !$ismodel['error']){ // when link containe make and model
               
                require 'controllers/mmp.php';            
                $controller = new MMP();
                $controller->loadModel('mmp_model');
                $product = $controller->model->getProduct();                 
                $controller->index($ismake['make'],$ismodel['model'],$product);
                
            }else{
                new Error();
            }
            
        }elseif(!empty($mmyp)){ // when we have make model year
            
            $ismake = $dbsth->getMake($mmyp[2], $mmyp[3]);
            $make = $ismake['make']['make'];
            $ismodel = $dbsth->getModel($mmyp[3],$ismake['part'],$make);  
            $year = $mmyp[1];
            $product = $dbsth->getProduct();     
            $cur_make = $ismake['make'];
            if($ismake['res'] && $ismodel['model']!= null && !$ismodel['error']){
                
                require 'controllers/mmyp.php';
                $controller = new MMYP();
                $controller->loadModel('mmyp_model');   
                $controller->index($cur_make,$ismodel['model'],$year,$product);
                
            }else{
                new Error();
            }
            
        }else{
            $file = 'views/'.$url.'.tpl';   //custom file        
            $urlpart = explode('-', $url);
            if($url=="" || $url=="index"){
                require 'controllers/index.php';
                $controller = new Index();                
                $controller->loadModel('index_model');
                $controller->index();

            }elseif(file_exists("controllers/{$urlpart[0]}.php")){
                require "controllers/{$urlpart[0]}.php";
                $controller = new $urlpart[0]();
                $controller->loadModel($urlpart[0].'_model');
                
                if($urlpart[2]!=null){
                    if(method_exists($urlpart[0], $urlpart[1])){
                        $controller->$urlpart[1]($urlpart[2]);
                    }
                }elseif($urlpart[1]!=null){
                    if(method_exists($urlpart[0], $urlpart[1])){
                        $controller->$urlpart[1]();
                    }
                }else{
                    $controller->index();
                }
            }elseif(file_exists($file)){ //try to include custom file
                $view = new View();
                $view->render($url,'custom');
            }else{
                new Error();
            }      
        }
    }
}
/*Class which can show Error Page*/
class Error{
    function __construct() {
        echo "Error 404";
    }
}