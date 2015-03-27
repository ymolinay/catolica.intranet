<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 21:27:17
         compiled from "./templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:1168392251550cd705430bb8-61298291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35d625b9220e24ba6b4c2233dd9c8efe5682c791' => 
    array (
      0 => './templates/login.html',
      1 => 1426312108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1168392251550cd705430bb8-61298291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd70545b092_82137100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd70545b092_82137100')) {function content_550cd70545b092_82137100($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
.widget-head-title {
	float:right;
	display:block;
	padding: 10px;
}
</style>
<!-- -->
<div class="admin-form">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<!-- -->
				<div class="widget worange">
				<!-- -->
                	<div class="widget-head"><img src="<?php echo $_smarty_tpl->tpl_vars['imgDir']->value;?>
logos/min-perucatolica.png"/></div>
					<div class="widget-content">
						<div class="padd">
                            <!-- -->
                            <form class="form-horizontal" action="principal.php">
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="inputUser">Usuario</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputUser" placeholder="Usuario">
                                </div>
							</div>
                        	<!-- -->
                            <div class="form-group">
                            	<label class="control-label col-lg-3" for="inputPassword">Contraseña</label>
                            	<div class="col-lg-9">
                            		<input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                            	</div>
                       	 	</div>
							<!-- -->
							<div class="form-group">
								<div class="col-lg-12">
                                    <center><p style="font-weight:normal">
                                    	<label style="font-size:9px"><strong style="color:#F90">¡Importante!</strong> se debe utilizar la ultima version de Chrome o Firefox</label>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['imgDir']->value;?>
logos/chrome.png"/>&nbsp;
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['imgDir']->value;?>
logos/firefox.png"/><br />
                                        <script> 
											function get_browser_info(){
    var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || []; 
    if(/trident/i.test(M[1])){
        tem=/\brv[ :]+(\d+)/g.exec(ua) || []; 
        return {
			name:'IE ',version:(tem[1]||'')};
        }   
    if(M[1]==='Chrome'){
        tem=ua.match(/\bOPR\/(\d+)/)
        if(tem!=null)   {
			return {
			name:'Opera', version:tem[1]
			};
			}
        }   
    M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
    if((tem=ua.match(/version\/(\d+)/i))!=null) {
		M.splice(1,1,tem[1]);}
    return {
      name: M[0],
      version: M[1]
    };
 }
 var browser=get_browser_info();
	document.write('<span style="font-size:9px"><strong>Navegador: </strong>' + browser.name)
	document.write('&nbsp;')
	document.write('V. ' +browser.version+ '<span>')
</script>
                                    </p></center>
								</div>
							</div>
                            <div class="message"></div>
                            <!-- -->
							<div class="col-lg-9 col-lg-offset-3">
								<button id="btnlogin" type="button" class="btn btn-info btn-sm">Iniciar sesión</button>
								<button type="reset" class="btn btn-default btn-sm">Limpiar</button>
							</div><br />
							</form>

						</div>
					</div>
                    <div class="widget-head-title"><i class="fa fa-lock"></i> Acceso Seguro</div>
                    <!-- -->
					<div class="widget-foot">¿Ha olvidado su contraseña? <a href="javascript:recoverPassword();">Click aquí</a></div>
				</div>  
			</div>
		</div>
	</div> 
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>