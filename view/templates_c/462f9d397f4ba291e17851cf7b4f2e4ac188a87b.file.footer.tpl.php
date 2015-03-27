<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 21:27:22
         compiled from "/var/www/html/catolica.intranet/view/structure/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1972431058550cd70a8751a5-25921870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462f9d397f4ba291e17851cf7b4f2e4ac188a87b' => 
    array (
      0 => '/var/www/html/catolica.intranet/view/structure/footer.tpl',
      1 => 1420307938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1972431058550cd70a8751a5-25921870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companyName' => 0,
    'softwareYear' => 0,
    'softwareName' => 0,
    'softwareVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd70a87aa50_18547809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd70a87aa50_18547809')) {function content_550cd70a87aa50_18547809($_smarty_tpl) {?><footer><div class="container"><div class="row"><div class="col-md-12">
<!-- Copyright info -->
<p class="copy"><?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['softwareYear']->value;?>
 | <strong><?php echo $_smarty_tpl->tpl_vars['softwareName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['softwareVersion']->value;?>
</strong></p>
</div></div></div>
</footer> 	
<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> <?php }} ?>