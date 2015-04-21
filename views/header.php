<!DOCTYPE html>
<html>
    <head>
        <title><?=$this->title;?></title>
        <meta name="description" content="<?=$this->description?>"/>
        <meta name="keywords" content="<?=$this->keywords?>"/>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="views/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="views/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="views/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="views/css/styles.css" />
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <header>
                    <div class="top row">
                        <div class="pull-left">
                            <i class="fa fa-envelope"></i> 
                            <a href="mailto:support@scienceg8.com">support@scienceg8.com</a>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-phone"></i> 907-671-9343
                        </div>  
                        <div class="clearfix"></div> 
                    </div>    

                    <div class="pull-left logo">
                        <h2> I'm Logo </h2>
                    </div>
                    <nav class="pull-right mt30">
                        <ul class="list-inline top-nav">  
                            <li><a href="/"<?php if($this->uri=='/' || $this->uri=='/index') echo "class='active'";?>>Home</a></li>
                            <li><a href="/">About Us</a></li>
                            <li><a href="/">Contact Us</a></li>
                        </ul>
                    </nav>
                <div class="clearfix"></div>
            </header>
            <section>