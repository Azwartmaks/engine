<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 10:21:32
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1765553de37c9591a1-69038236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0c8ddfcfb41f04bcaab6853b9fe5deb67427d6e' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1430118029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1765553de37c9591a1-69038236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de37c9e7926_07622510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de37c9e7926_07622510')) {function content_553de37c9e7926_07622510($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
"/>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
"/>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="views/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="views/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="views/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="views/css/styles.css" />
        <!--[if IE]>
            <?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
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
                        <li><a href="/"<?php if ($_smarty_tpl->tpl_vars['url']->value==null||$_smarty_tpl->tpl_vars['url']->value=='index') {?> <?php echo "class='active'";
}?>>Home</a></li>
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
            <section><?php }} ?>
