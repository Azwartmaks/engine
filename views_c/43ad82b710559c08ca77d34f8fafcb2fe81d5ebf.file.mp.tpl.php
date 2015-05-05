<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-05 16:26:24
         compiled from "views\mp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32318553df4ee380d90-85016607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ad82b710559c08ca77d34f8fafcb2fe81d5ebf' => 
    array (
      0 => 'views\\mp.tpl',
      1 => 1430832378,
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
    'make' => 0,
    'products' => 0,
    'product' => 0,
    'models' => 0,
    'model' => 0,
    'productUrl' => 0,
    'productname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553df4ee406898_12363335')) {function content_553df4ee406898_12363335($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'Z:\\home\\engine\\www\\lib\\plugins\\modifier.capitalize.php';
?><div class="wrapper mt30">
    <div class="content col-sm-9">
        <div class="main-banner">
            <img src="views/images/bg_header.jpg" class="responsive">
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/breadcrumbs_mp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <hr/>
        <h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>

        <p>You can install a grill or <a href="http://www.scienceg8.com/abs-plastic-body-kits.html">ABS Plastic Body Kits</a> on your car. It will make your car more attractive but it won't make your vehicle faster. If you want to have a fast car install some performance accessories.</p>
        <p>Automobiles industry is one of the largest sectors in this whole world since everyone nowadays owns a vehicle. Moreover, any sector that is big obviously includes a lot of competition. Therefore, to keep up with the competition, creativity becomes very important. Acura cars have its own status in the automobiles industry and are mostly popular for their wide range of racing cars. Undoubtedly, it is very famous and known brand in the Automobiles industry nowadays, mostly because of its awesome performance, which is a result of Acura performance accessories.</p>
        <p><b><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['make']->value);?>
</b> does not stop right after launching their new models, but they also do provide various additional performance parts for the Acura owners. So upgrading your car with these performance parts can add up to extra performance rating than previously.</p>
        <p>There is a huge amount of additional performance parts for Acura cars that are available in the market, but below mentioned are the most important and basic parts mentioned.</p>
        <p>1. <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['make']->value);?>
 Exhaust system: Custom Exhaust is pretty big in size and it works perfectly in keeping the engine clean from toxics and helps boosting the torque along with the horsepower.</p>
        <p>2. <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['make']->value);?>
 Air intakes: are much better than the normal intakes and they work far better as they are specially made for mustang cars. The air filters and the latest technology used in those intakes never lets the engine heat up and are even takes care of the engine on rainy days.</p>
        <p>3. <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['make']->value);?>
 Pulley: adds the extra punch that you need for your ride and increases the horsepower. It is generally made of aluminium and adds that exact extra boost that your Acura might need.</p>
        <p>4. <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['make']->value);?>
 Headers: Headers might not seem that important but it does give your car a decent amount of power boost, more fuel efficiency and better performance of the exhaust system and obviously, Acura Headers being specially built for its cars serves all these actions better than the normal ones.</p>
        <p>These four parts are the main ones that are needed to be upgraded in your car, it’s not like they are needed to be done at once but they all add their own benefit to the car’s overall performance. Therefore, it would be wise to upgrade them all.</p>
    <?php echo $_smarty_tpl->getSubTemplate ("blocks/footer-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['make']->value);?>
 model
            </div>
            <ul class="side-list">
                <?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['make']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['model']->value['model'];?>
-<?php echo $_smarty_tpl->tpl_vars['productUrl']->value;?>
.html"><b><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['model']->value['model']);?>
</b> <?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
</a></li>
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
<?php }} ?>
