<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-05 17:17:19
         compiled from "views\blocks\breadcrumbs_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26044553de4df631c92-45213015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e86cd8787dd93c484988e34dc0942b17a753f6a7' => 
    array (
      0 => 'views\\blocks\\breadcrumbs_product.tpl',
      1 => 1430835434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26044553de4df631c92-45213015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de4df6a7a79_57751965',
  'variables' => 
  array (
    'parentId' => 0,
    'productname' => 0,
    'parentProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de4df6a7a79_57751965')) {function content_553de4df6a7a79_57751965($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'Z:\\home\\engine\\www\\lib\\plugins\\modifier.capitalize.php';
?><div class="breadcrumbs">
<?php if ($_smarty_tpl->tpl_vars['parentId']->value==0) {?>
    <a href='/'>Home</a><span class='sep'><i class='fa fa-caret-right'></i></span>
    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['productname']->value);?>

<?php } else { ?>
    <a href='/'>Home</a><span class='sep'><i class='fa fa-caret-right'></i></span>
    <a href='<?php echo $_smarty_tpl->tpl_vars['parentProduct']->value[0]['alias'];?>
.html'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['parentProduct']->value[0]['name']);?>
</a>
    <span class='sep'><i class='fa fa-caret-right'></i></span>        
    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['productname']->value);?>

<?php }?>    
</div><?php }} ?>
