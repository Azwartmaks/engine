<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 11:19:06
         compiled from "views\blocks\footer-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28985553de9d4eabc74-27284831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b46a92eaf12f8dd1b9e458c72d78e160b6b79d05' => 
    array (
      0 => 'views\\blocks\\footer-product.tpl',
      1 => 1430122742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28985553de9d4eabc74-27284831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de9d5021690_25190343',
  'variables' => 
  array (
    'subtype' => 0,
    'makes' => 0,
    'make' => 0,
    'productUrl' => 0,
    'productname' => 0,
    'i' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de9d5021690_25190343')) {function content_553de9d5021690_25190343($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'Z:\\home\\engine\\www\\lib\\plugins\\function.counter.php';
if (!is_callable('smarty_modifier_replace')) include 'Z:\\home\\engine\\www\\lib\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) include 'Z:\\home\\engine\\www\\lib\\plugins\\modifier.capitalize.php';
?><?php if (!$_smarty_tpl->tpl_vars['subtype']->value) {?>
<div class="container row">
    <div class="col-sm-9">
        <hr/>
        <div class="col-sm-3">
            <ul class="side-list">
                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                <?php $_smarty_tpl->tpl_vars["lng"] = new Smarty_variable(ceil(((count($_smarty_tpl->tpl_vars['makes']->value))/4)), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['make'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['make']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['makes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['make']->key => $_smarty_tpl->tpl_vars['make']->value) {
$_smarty_tpl->tpl_vars['make']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['make']->value['make'];?>
-<?php echo $_smarty_tpl->tpl_vars['productUrl']->value;?>
.html">
                        <?php echo smarty_modifier_capitalize(smarty_modifier_replace($_smarty_tpl->tpl_vars['make']->value['make'],'-',' '));?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['productname']->value);?>
</a></li>
                <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['lng']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
            </ul>
        </div>
        <div class="col-sm-3">
            <ul class="side-list">
                <?php }?>
                <?php } ?>
            </ul>
        </div>  
    </div>    
</div>    
<?php }?><?php }} ?>
