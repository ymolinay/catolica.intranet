<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 21:27:22
         compiled from "./templates/principal.html" */ ?>
<?php /*%%SmartyHeaderCode:1068494787550cd70a797d16-18528668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e71a7b509c2307bc5b0e39a8ff060c86cc62af4' => 
    array (
      0 => './templates/principal.html',
      1 => 1425732474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1068494787550cd70a797d16-18528668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sessionPersonal' => 0,
    'sessionIdPerfil' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd70a7e76e1_79191652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd70a7e76e1_79191652')) {function content_550cd70a7e76e1_79191652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/topBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/headerContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/beginContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/navigationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/beginMainbarContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/beginMatterContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- contenido -->
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/beginWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
INICIO
	<?php echo $_smarty_tpl->getSubTemplate ("../structure/contentWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<h3>BIENVENIDOS AL SISTEMA,<strong> <?php echo $_smarty_tpl->tpl_vars['sessionPersonal']->value;?>
</strong></h3>
    <?php if ($_smarty_tpl->tpl_vars['sessionIdPerfil']->value==1){?>
    	<strong>Perfil:</strong> Administrador<br />
    <?php }?>
    <strong>Hora Inicio:</strong> <script>var d = new Date(); document.write( ((d.getHours()<10)? '0'+d.getHours():d.getHours()) + ':'+((d.getMinutes()<10)? '0'+d.getMinutes():d.getMinutes())+':'+((d.getSeconds()<10)? '0'+d.getSeconds():d.getSeconds()));</script>
    <strong>Fecha Inicio:</strong> <script>var d = new Date(); document.write( ((d.getDay()<10)? '0'+d.getDay():d.getDay()) + '/'+((d.getMonth()<10)? '0'+d.getMonth():d.getMonth())+'/'+((d.getFullYear()<10)? '0'+d.getFullYear():d.getFullYear()));</script>

    
    <style>
     td{ padding:10px; }
	 table{ margin-top: 40px;text-align:center;}
	 td a img:hover{
		 margin-top: 2px;
		opacity: 1;
    -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(.7, transparent), to(rgba(0,0,0,0.4)));
    -webkit-box-shadow: 0px 0px 20px rgba(255,255,255,0.8);
    -moz-box-shadow: 0px 0px 20px rgba(255,255,255,0.8);
    box-shadow: 0px 0px 20px rgba(255,255,255,0.8);
		 }
    </style>
    <p></p>
    <div class="row">
    	<div class="col-md-4">
        	<center>
            	<table>
                    	<tr>
                    		<th colspan="3"><center>CONFIGURACIÓN</center></th>
                        </tr>
                    	<tr>
                        	<td><a href="usuarios.php"><img src="../files/img/menu/users.png" width="70px" /></a><br />Usuarios</td>
                            <td><a href="carreras.php"><img src="../files/img/menu/alumnos.png" width="70px" /></a><br />Carreras</td>
                            <td><a href="cursos.php"><img src="../files/img/menu/cursos.png" width="70px" /></a><br />Cursos</td>
                        </tr>
                        <tr>
                        	<td><a href="horarios.php"><img src="../files/img/menu/horarios.png" width="70px" /></a><br />Horarios</td>
                        </tr>
            	</table>
            </center>
        </div>
        <div class="col-md-4"><center>
            	<table>
                    	<tr>
                    		<th colspan="3"><center>HERRAMIENTAS</center></th>
                        </tr>
                    	<tr>
                        	<td> <a href="miperfil.php"><img src="../files/img/menu/nose.png" width="70px" /></a><br />Mi Perfil</td>
                            <td><a href="../files/PDF/manual.pdf" target="_blank"><img src="../files/img/menu/manual.png" width="70px" /></a><br />Manual de Usuario</td>
                          
                        </tr>
                        
            	</table>
            </center>
        </div>
        <div class="col-md-4"><table>
                    	<tr>
                    		<th colspan="3"><center>MATRICULAS</center></th>
                        </tr>
                    	<tr>
                        	<td><a href="fichaInscripcion.php"><img src="../files/img/menu/info.png" width="70px" /></a><br />Inscripción</td>
                            <td> <a href="RegistrarAlumno.php"><img src="../files/img/menu/tikect.png" width="70px" /></a><br />Registrar Alumno</td>
                          <td> <a href="GenerarInscripcionCarrera.php"><img src="../files/img/menu/inscribir.png" width="70px" /></a><br />Inscribir Alumno</td>
                        </tr>
                        <tr>
                        	<td><a href="GenerarMatricula.php"><img src="../files/img/menu/matricular.png" width="70px" /></a><br />Matricula</td>
                            <td><a href="pagoMatricula.php"><img src="../files/img/menu/pagos.png" width="70px" /></a><br />Pago Matricula</td>
                        </tr>
                        
            	</table>
            </center>
        </div>
    </div>
       <?php echo $_smarty_tpl->getSubTemplate ("../structure/endWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMatterContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMainbarContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/endContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>