<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 11:42:38
         compiled from "views\mp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32318553df4ee380d90-85016607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ad82b710559c08ca77d34f8fafcb2fe81d5ebf' => 
    array (
      0 => 'views\\mp.tpl',
      1 => 1430124154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32318553df4ee380d90-85016607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553df4ee406898_12363335',
  'variables' => 
  array (
    'header' => 0,
    'text' => 0,
    'models' => 0,
    'make' => 0,
    'model' => 0,
    'productUrl' => 0,
    'product' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553df4ee406898_12363335')) {function content_553df4ee406898_12363335($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'Z:\\home\\engine\\www\\lib\\plugins\\modifier.capitalize.php';
?><div class="wrapper mt30">
    <div class="content col-sm-9">
        <div class="main-banner">
            <img src="views/images/bg_header.jpg" class="responsive">
        </div>
        <hr/>
        <h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        <ul>
            <?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['make']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['model']->value['model'];?>
-<?php echo $_smarty_tpl->tpl_vars['productUrl']->value;?>
.html"><?php echo $_smarty_tpl->tpl_vars['model']->value['model'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</a></li>
            <?php } ?>
        </ul>
        
    </div>
    <div class="sidebar col-sm-3">
        <div class="side-block first">
            <div class="side-h2">
                Car components
            </div>
            <ul class="side-list">                
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <li>
                    <a  <?php if ($_smarty_tpl->tpl_vars['product']->value['alias']=='performance-accessories') {?>
                            href='/'
                        <?php } else { ?>
                            href='<?php echo $_smarty_tpl->tpl_vars['product']->value['alias'];?>
.html'            
                        <?php }?>><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['product']->value['name']);?>
</a>
                </li>   
                <?php } ?>
            </ul>
        </div>
        <div class="side-block first">
            <div class="side-h2">
                Videos
            </div>
            <ul class="side-list">
                <li><a href="http://www.youtube.com/watch?v=eame263N0WY" rel="nofollow" target="_blank">How The Car Works</a></li>
                <li><a href="http://www.youtube.com/watch?v=OT_WaDQ191E" rel="nofollow" target="_blank">ABS In Cars</a></li>
                <li><a href="http://www.youtube.com/watch?v=7MpoPNK-gNg" rel="nofollow" target="_blank">Nissan's Direct Injection</a></li>
                <li><a href="http://www.youtube.com/watch?v=8pxK8fRsNMM" rel="nofollow" target="_blank">Power Steering Pump Removal</a></li>
            </ul>
        </div>    
    </div>
    <div class="clearfix"></div>
</div> 
<?php echo $_smarty_tpl->getSubTemplate ("blocks/footer-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
