<?php /* Smarty version Smarty-3.1.14, created on 2015-03-27 08:18:36
         compiled from "./templates/mantenimientoMatricula.html" */ ?>
<?php /*%%SmartyHeaderCode:1848658896550cd710956e66-87178804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3fb551b581bcfb2dacb7cacf311652ed0826191' => 
    array (
      0 => './templates/mantenimientoMatricula.html',
      1 => 1427462308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848658896550cd710956e66-87178804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd71097f487_24517042',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd71097f487_24517042')) {function content_550cd71097f487_24517042($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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


    <form id="formMatriculaM" name="formMatriculaM" class="form-horizontal" role="form">
        <?php echo $_smarty_tpl->getSubTemplate ("../structure/beginWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
GENERAR MATRÍCULA
        <?php echo $_smarty_tpl->getSubTemplate ("../structure/contentWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="form-group">
                <label class="col-lg-2 control-label">Carrera</label>
                <div class="col-lg-5">
                    <select id="idCarrera" name="idCarrera" class="form-control" onchange="comboboxUsuarioCarrera();comboboxSeccion();">
                        <option selected="selected" value="">Seleccionar Carrera</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Estudiante</label>
                <div class="col-lg-5">
                    <input id="idMatricula" name="idMatricula" type="text" class="notVisible">
                    <select id="idUsuarioCarrera" name="idUsuarioCarrera" class="form-control" onchange="showExtraData();">
                        <option selected="selected" value="">Seleccionar Estudiante</option>
                    </select>
                </div>
                <span id="mensajeDNI" class="label label-info" style="padding:10px;">No se seleccionó estudiante.</span>
            </div>
            <!--<div class="form-group">
                <label class="col-lg-2 control-label hidden-xs"></label>
                <div class="col-lg-5 text-left">
                    <span id="mensajeDNI" class="label label-info" style="padding:10px;">No se seleccionó estudiante.</span>
                </div>
            </div>-->
            <div class="form-group">
                <label class="col-lg-2 control-label">Sede</label>
                <div class="col-lg-5">
                    <select id="idSede" name="idSede" class="form-control">
                        <option selected="selected" value="">Seleccionar Sede</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Ciclo</label>
                <div class="col-lg-2">
                    <select id="idCiclo" name="idCiclo" class="form-control">
                        <option selected="selected" value="">Seleccionar Ciclo</option>
                    </select>
                </div>
                <label class="col-lg-1 control-label">Turno</label>
                <div class="col-lg-2">
                    <select id="idTurno" name="idTurno" class="form-control" onchange="comboboxSeccion();">
                        <option selected="selected" value="">Seleccionar Turno</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Seccion</label>
                <div class="col-lg-3">
                    <select id="idSeccion" name="idSeccion" class="form-control" onchange="showExtraData();">
                        <option selected="selected" value="">Seleccionar Sección</option>
                    </select>
                </div>
                <span id="mensajeMax" class="label label-info" style="padding:10px;">No se seleccionó sección.</span>
                <span id="mensajeIni" class="label label-info" style="padding:10px;">No se seleccionó sección.</span>
            </div>
            <!--<div class="form-group">
                <label class="col-lg-2 control-label hidden-xs"></label>
                <div class="col-lg-5 text-right">
                    <span id="mensajeMax" class="label label-info" style="padding:10px;">No se seleccionó sección.</span>
                    <span id="mensajeIni" class="label label-info" style="padding:10px;">No se seleccionó sección.</span>
                </div>
            </div>-->
            <div class="form-group">
                <label class="col-lg-2 control-label">Estado</label>
                <div class="col-lg-3">
                    <select id="idEstadoMatricula" name="idEstadoMatricula" class="form-control">
                        <option selected="selected" value="">Seleccionar Estado</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-6">
                    <!--<button type="button" class="btn btn-sm btn-primary" onclick="verDetallePlanEstudio();">Ver Cursos</button>-->
                    <button id="buttonShowCourses" type="button" class="btn btn-sm btn-info" onclick="gridMatricula();">Buscar</button>
                    <button type="button" class="btn btn-sm btn-default" onclick="clearForm('Zm9ybU1hdHJpY3VsYU0=');reloadPage();">Limpiar</button>
                    <!--<button type="button" class="btn btn-sm btn-success">Success</button>
                    <button type="button" class="btn btn-sm btn-info">Info</button>
                    <button type="button" class="btn btn-sm btn-warning">Warning</button>
                    <button type="button" class="btn btn-sm btn-danger">Danger</button>-->
                </div>
            </div>
        <?php echo $_smarty_tpl->getSubTemplate ("../structure/endWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <!--<div class="widget wgreen">
            <div class="widget-head">
                <div class="pull-left">Cursos</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <div class="padd">
                    <div class="tableCursosMatricula">
                    <br />
                    </div>
                    <input id="_idCiclo" name="_idCiclo" type="text" class="notVisible" readonly="">
                    <input id="_idUsuarioCarrera" name="_idUsuarioCarrera" type="text" class="notVisible" readonly="">
                    <input id="_idSeccion" name="_idSeccion" type="text" class="notVisible" readonly="">
                    <button type="button" class="btn btn-sm btn-primary" onclick="confirmGenerateMatricula();">Generars Matrícula</button>
                </div>
            </div>
            <div class="widget-foot">
            </div>
        </div>-->

    <div class="tableMatriculas widget"></div>
    <div class="tablePlanEstudiosMatricula widget"></div>

    </form>
<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMatterContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMainbarContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/endContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>