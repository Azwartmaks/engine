<!DOCTYPE html>
<html>
    <head>
        <title>{$title}</title>
        <meta name="description" content="{$meta_description}"/>
        <meta name="keywords" content="{$meta_keywords}"/>
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

        <header>
            
                <div class="top row">
                    <div class="container">
                        <div class="pull-left">
                            <div class="top-cell">
                                <i class="fa fa-envelope"></i> 
                                <a href="mailto:support@scienceg8.com">support@scienceg8.com</a>
                            </div>
                            <div class="top-cell ml5">
                                <i class="fa fa-phone"></i> 907-671-9343
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="soc g-btn"><i class="fa fa-google-plus"></i></div>
                            <div class="soc t-btn"><i class="fa fa-twitter"></i></div>
                            <div class="soc f-btn"><i class="fa fa-facebook"></i></div>
                        </div>  
                        <div class="clearfix"></div> 
                    </div>    
                </div>    
            <div class="container">
                <div class="pull-left logo">
                    I'm Logo 
                </div>
                <nav class="pull-left top-nav">
                    <ul>  
                        <li><a href="/"<?php if($this->uri=='/' || $this->uri=='/index') echo "class='active'";?>>Home</a></li>
                        <li><a href="/">About Us</a></li>
                        <li><a href="/">Contact Us</a></li>
                    </ul>
                </nav>                
                <div class="pull-right">
                    <form class="form-search">
                        <input type="text" name="search" placeholder="search..." value=""/>
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>


            <div class="clearfix"></div>
            </div>
        </header>
        <img src="views/images/banner-engine-tuning.jpg" class="responsive"/>
        <div class="container">
            <section>