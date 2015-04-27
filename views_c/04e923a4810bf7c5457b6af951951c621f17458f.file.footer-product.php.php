<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 10:27:27
         compiled from "views\blocks\footer-product.php" */ ?>
<?php /*%%SmartyHeaderCode:18757553de4df72cd71-56113498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e923a4810bf7c5457b6af951951c621f17458f' => 
    array (
      0 => 'views\\blocks\\footer-product.php',
      1 => 1429703454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18757553de4df72cd71-56113498',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de4df7450f0_05799020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de4df7450f0_05799020')) {function content_553de4df7450f0_05799020($_smarty_tpl) {?><?php echo '<?php'; ?>
 if(!$this->subtype):<?php echo '?>'; ?>

<div class="container row">
    <div class="col-sm-9">
        <hr/>
        <div class="col-sm-3">
            <ul class="side-list">
                <?php echo '<?php'; ?>
 
                $i=0; $lng = ceil(count($this->makes)/4);
                foreach ($this->makes as $make):<?php echo '?>'; ?>

                <li><a href="<?php echo '<?'; ?>
=$make['make'].'-'.$this->productUrl.'.html'<?php echo '?>'; ?>
"><?php echo '<?'; ?>
=  str_replace('-', ' ', ucwords($make['make'])).' '.ucwords($this->product);<?php echo '?>'; ?>
</a></li>
                <?php echo '<?php'; ?>
 $i++;
                if($i==$lng): $i=0;<?php echo '?>'; ?>

            </ul>
        </div>
        <div class="col-sm-3">
            <ul class="side-list">
                <?php echo '<?php'; ?>
 endif;endforeach;<?php echo '?>'; ?>

            </ul>
        </div>  
    </div>    
</div>    
<?php echo '<?php'; ?>
 endif;<?php echo '?>'; ?>
<?php }} ?>
