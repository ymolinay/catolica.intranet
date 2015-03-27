<?php /* Smarty version Smarty-3.1.14, created on 2015-03-18 22:46:49
         compiled from "C:\wamp\www\catolica.intranet\view\structure\beginMainbarContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32266550a46a97a17e0-23178660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2cf6bf2499273d7fe87d29f9e0c687a45667422' => 
    array (
      0 => 'C:\\wamp\\www\\catolica.intranet\\view\\structure\\beginMainbarContent.tpl',
      1 => 1420643120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32266550a46a97a17e0-23178660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headerIconContent' => 0,
    'headerContent' => 0,
    'showSubHeader' => 0,
    'subHeader' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550a46a982dad6_31795787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550a46a982dad6_31795787')) {function content_550a46a982dad6_31795787($_smarty_tpl) {?><div class="mainbar">
	<!-- -->
	<div class="page-head">
		<!-- Page heading -->
		<h2 class="pull-left"><i class="<?php echo $_smarty_tpl->tpl_vars['headerIconContent']->value;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['headerContent']->value;?>
</h2>
		<!-- Breadcrumb -->
		<div class="bread-crumb pull-right">
			<a href="principal.php"><i class="fa fa-home"></i> Principal</a> 
            <?php if ($_smarty_tpl->tpl_vars['showSubHeader']->value!='no'){?>
            	<span class="divider">/</span> 
            	<?php echo $_smarty_tpl->tpl_vars['subHeader']->value['title'];?>

            	<span class="divider">/</span> 
            	<a href="<?php echo $_smarty_tpl->tpl_vars['subHeader']->value['link'];?>
" class="bread-current"><?php echo $_smarty_tpl->tpl_vars['subHeader']->value['header'];?>
</a>
            <?php }?>
		</div>
		<div class="clearfix"></div>
	</div><?php }} ?>