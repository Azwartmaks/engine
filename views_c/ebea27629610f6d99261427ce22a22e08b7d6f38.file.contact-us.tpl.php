<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 16:25:47
         compiled from "views\contact-us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27539554229f56b2e21-64947472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebea27629610f6d99261427ce22a22e08b7d6f38' => 
    array (
      0 => 'views\\contact-us.tpl',
      1 => 1430400343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27539554229f56b2e21-64947472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554229f572e0b2_79345790',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554229f572e0b2_79345790')) {function content_554229f572e0b2_79345790($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("Contact us | Engine", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h1>Contact Us</h1>
<?php echo $_smarty_tpl->getSubTemplate ("blocks/footer-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
