<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller {
    
    function __construct() {
        header('Content-Type: text/html; charset=utf-8');
        session_start();
        $this->view = new View();
        $this->adminview = new AdminView();
    }
        
    function loadModel($model_name){
        $file = "models/{$model_name}.php";
        if(file_exists($file)){
            require $file;
            $this->model = new $model_name();
        }
    }
    
}