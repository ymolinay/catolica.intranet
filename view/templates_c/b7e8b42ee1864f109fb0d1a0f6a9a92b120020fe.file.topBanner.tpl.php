<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 21:27:22
         compiled from "/var/www/html/catolica.intranet/view/structure/topBanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9708092550cd70a7f1570-75369735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7e8b42ee1864f109fb0d1a0f6a9a92b120020fe' => 
    array (
      0 => '/var/www/html/catolica.intranet/view/structure/topBanner.tpl',
      1 => 1425557784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9708092550cd70a7f1570-75369735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgDir' => 0,
    'sessionUsuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd70a7f93c0_71596159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd70a7f93c0_71596159')) {function content_550cd70a7f93c0_71596159($_smarty_tpl) {?><div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span>Sesión</span>
            </button>
            <!-- Site name for smallar screens -->
            <a href="#" class="navbar-brand hidden-lg"><img src="<?php echo $_smarty_tpl->tpl_vars['imgDir']->value;?>
logos/min-perucatolica.png" width="180px" /></a>
        </div>
        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         
        <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">            
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['sessionUsuario']->value;?>
 <b class="caret"></b>              
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="miperfil.php"><i class="fa fa-user"></i> Perfil</a></li>
                        <li><a href="javascript:logOut();"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>
                    </ul>
               </li>
            </ul>
        </nav>
    </div>
</div><?php }} ?>