<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View extends Smarty{
    var $uri;
    function varToTemp($varname,$value){  

        $this->assign($varname,$value);
    }
    function render($name){
        $this->uri = str_replace('.html','',$_SERVER['REQUEST_URI']);
        $file = "views/{$name}.tpl";
                $this->setTemplateDir('views/');
        $this->setCompileDir('/views_c/');
        if(file_exists($file)){
            $this->display('header.tpl');
            $this->display($file);
            $this->display('footer.tpl');
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