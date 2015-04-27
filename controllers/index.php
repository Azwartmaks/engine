<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Index extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->view->varToTemp('url',$_GET['url']);
        $this->view->varToTemp('title','Car body kits and performance - Engine');
        $this->view->varToTemp('meta_description','Car body kits and performance - Engine');
        $this->view->varToTemp('meta_keywords','Car body kits and performance - Engine');
        $this->view->varTotemp('products',$this->model->getAllParentProducts());
        $this->view->render('index');
    }
}
