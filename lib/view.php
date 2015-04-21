<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View{
    var $uri;
    
    function render($name){
        $this->uri = str_replace('.html','',$_SERVER['REQUEST_URI']);
        $file = "views/{$name}.php";
        if(file_exists($file)){
            require 'views/header.php';
            require $file;
            require 'views/footer.php';
        }
    }
}

class AdminView{
    
    function render($name,$addon=null){
        $file = "views/admin/{$name}.php";
        if(file_exists($file)&&$addon==null){
            require 'views/admin/header.php';
            require $file;
            require 'views/admin/footer.php';
        }elseif(file_exists($file)&&$addon!=null){
            require $file;
        }
    }
}