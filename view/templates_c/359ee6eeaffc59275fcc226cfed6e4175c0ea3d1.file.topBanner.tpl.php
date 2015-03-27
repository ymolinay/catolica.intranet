<?php /* Smarty version Smarty-3.1.14, created on 2015-03-18 22:46:49
         compiled from "C:\wamp\www\catolica.intranet\view\structure\topBanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24574550a46a93cbb86-40004485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '359ee6eeaffc59275fcc226cfed6e4175c0ea3d1' => 
    array (
      0 => 'C:\\wamp\\www\\catolica.intranet\\view\\structure\\topBanner.tpl',
      1 => 1425557784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24574550a46a93cbb86-40004485',
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
  'unifunc' => 'content_550a46a9414812_69894609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550a46a9414812_69894609')) {function content_550a46a9414812_69894609($_smarty_tpl) {?><div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
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