<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-05 17:23:44
         compiled from "views\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26042553de37ca2b032-81207729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a05f4f7a2ee2129076e12c6d62996120686f16' => 
    array (
      0 => 'views\\product.tpl',
      1 => 1430835818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26042553de37ca2b032-81207729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de37cae6343_95203692',
  'variables' => 
  array (
    'header' => 0,
    'products' => 0,
    'subProducts' => 0,
    'subProduct' => 0,
    'text' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de37cae6343_95203692')) {function content_553de37cae6343_95203692($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'Z:\\home\\engine\\www\\lib\\plugins\\modifier.capitalize.php';
?><div class="wrapper">
    <div class="content col-sm-9">
            <?php echo $_smarty_tpl->getSubTemplate ("views/blocks/breadcrumbs_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
        <hr/>
        <h1><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['header']->value);?>
</h1>
        <?php if ($_smarty_tpl->tpl_vars['products']->value!='') {?>
            <ul class="subptype-list">
                <?php  $_smarty_tpl->tpl_vars['subProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subProduct']->key => $_smarty_tpl->tpl_vars['subProduct']->value) {
$_smarty_tpl->tpl_vars['subProduct']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['subProduct']->value['alias'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['subProduct']->value['header'];?>
</a></li>
                <?php } ?>
            </ul>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

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
