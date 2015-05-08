<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-08 14:47:15
         compiled from "views\sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799554b54786f5355-96256025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce844b61b90027126d6bc057f843a364519e886d' => 
    array (
      0 => 'views\\sitemap.tpl',
      1 => 1431085630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1799554b54786f5355-96256025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554b54786f9cb9_22607360',
  'variables' => 
  array (
    'mmyProducts' => 0,
    'product' => 0,
    'makeModel' => 0,
    'item' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b54786f9cb9_22607360')) {function content_554b54786f9cb9_22607360($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mmyProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <div class="clearfix"></div>
    <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['makeModel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="col-sm-4">
            <h4><?php echo $_smarty_tpl->tpl_vars['item']->value['make'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h4>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['models']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->_loop = true;
?>
                    <li><b><?php echo $_smarty_tpl->tpl_vars['model']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</b></li>
                <?php } ?>
            </ul>  
        </div>
    <?php } ?>    
<?php } ?>    <?php }} ?>
