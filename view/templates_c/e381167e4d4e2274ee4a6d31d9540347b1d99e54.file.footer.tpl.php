<?php /* Smarty version Smarty-3.1.14, created on 2015-03-18 22:46:49
         compiled from "C:\wamp\www\catolica.intranet\view\structure\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17506550a46a999c6a6-95135020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e381167e4d4e2274ee4a6d31d9540347b1d99e54' => 
    array (
      0 => 'C:\\wamp\\www\\catolica.intranet\\view\\structure\\footer.tpl',
      1 => 1420307938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17506550a46a999c6a6-95135020',
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
  'unifunc' => 'content_550a46a99d1ec1_12550558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550a46a99d1ec1_12550558')) {function content_550a46a99d1ec1_12550558($_smarty_tpl) {?><footer><div class="container"><div class="row"><div class="col-md-12">
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