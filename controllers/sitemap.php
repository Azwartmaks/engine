<?php

class Sitemap extends Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->view->varToTemp('hello','hello');
        $this->view->varToTemp('mmyProducts',$this->model->getMmyProducts());
        $this->view->varToTemp('makeModel',$this->model->getMakeModel());
        $this->view->render('sitemap');
    }
}

