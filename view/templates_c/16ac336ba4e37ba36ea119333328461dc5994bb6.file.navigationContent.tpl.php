<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 21:27:22
         compiled from "/var/www/html/catolica.intranet/view/structure/navigationContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:354348644550cd70a804810-22843243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ac336ba4e37ba36ea119333328461dc5994bb6' => 
    array (
      0 => '/var/www/html/catolica.intranet/view/structure/navigationContent.tpl',
      1 => 1426853858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '354348644550cd70a804810-22843243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'optionActive' => 0,
    'i' => 0,
    'VActive' => 0,
    'sessionIdPerfil' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd70a8509b1_86191828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd70a8509b1_86191828')) {function content_550cd70a8509b1_86191828($_smarty_tpl) {?><!-- 
perfil
1->administrador
2->alumno
3->administrativo
4->docente
-->
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <?php if ($_smarty_tpl->tpl_vars['optionActive']->value==$_smarty_tpl->tpl_vars['i']->value){?>
    	<?php $_smarty_tpl->createLocalArrayVariable('VActive', null, 0);
$_smarty_tpl->tpl_vars['VActive']->value[$_smarty_tpl->tpl_vars['i']->value] = 'class="open"';?>
    <?php }?>
<?php }} ?>
<?php if ($_smarty_tpl->tpl_vars['optionActive']->value!=''){?>
<!-- -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Menu</a></div>
    <ul id="nav">
    <li <?php echo $_smarty_tpl->tpl_vars['VActive']->value[0];?>
><a href="principal.php"><i class="fa fa-home"></i> Principal</a></li>
    <?php if ($_smarty_tpl->tpl_vars['sessionIdPerfil']->value==1||$_smarty_tpl->tpl_vars['sessionIdPerfil']->value==3){?>  
    <li <?php echo $_smarty_tpl->tpl_vars['VActive']->value[1];?>
 class="has_sub"><a href=""><i class="fa fa-tasks"></i> Configuración  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a> 
        <ul>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="carreras.php">Carreras</a></li>
            <li><a href="cursos.php">Cursos</a></li>
            <li><a href="seccion.php">Secciones</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <!--<li><a href="docentes.php">Docentes</a></li>-->
        </ul>
    </li>
    <?php }?>
    <li <?php echo $_smarty_tpl->tpl_vars['VActive']->value[2];?>
><a href="miperfil.php"><i class="fa fa-user"></i> Mi Perfil</a></li>
    <?php if ($_smarty_tpl->tpl_vars['sessionIdPerfil']->value==1||$_smarty_tpl->tpl_vars['sessionIdPerfil']->value==3){?>  
    <li <?php echo $_smarty_tpl->tpl_vars['VActive']->value[3];?>
 class="has_sub"><a href=""><i class="fa fa-file"></i> Inscripciones <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a> 
        <ul>
            <li><a href="fichaInscripcion.php">Ficha Inscripción</a></li>
            <!--<li><a href="inscripciones.php">Lista Inscripciones</a></li>-->
            <!--<li><a href="docentes.php">Docentes</a></li>-->
        </ul>
    </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sessionIdPerfil']->value==1||$_smarty_tpl->tpl_vars['sessionIdPerfil']->value==3){?>  
    <li <?php echo $_smarty_tpl->tpl_vars['VActive']->value[4];?>
 class="has_sub"><a href=""><i class="fa fa-file"></i> Alumnos <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a> 
        <ul>
            <li><a href="registrarAlumno.php">Registrar Alumno</a></li>
            <li><a href="alumnos.php">Lista de Alumnos</a></li>
        </ul>
    </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sessionIdPerfil']->value==1||$_smarty_tpl->tpl_vars['sessionIdPerfil']->value==3){?>  
    <li <?php echo $_smarty_tpl->tpl_vars['VActive']->value[5];?>
 class="has_sub"><a href=""><i class="fa fa-file"></i> Matriculas  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a> 
        <ul>
            <li><a href="generarInscripcionCarrera.php">Inscribir Alumno</a></li>
            <li><a href="generarMatricula.php">Matricular Alumno</a></li>
             <li><a href="pagoMatricula.php">Pago Matricula</a></li>
             <li><a href="mantenimientoMatricula.php">Mantenimiento Matricula</a></li>
        </ul>
    </li>
    <?php }?>
    </ul>
</div>
<?php }?><?php }} ?>