<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 21:27:38
         compiled from "./templates/generarInscripcionCarrera.html" */ ?>
<?php /*%%SmartyHeaderCode:247173747550cd71a781508-28834685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '223dde561262a408c1afa5ab03e851e84f322e51' => 
    array (
      0 => './templates/generarInscripcionCarrera.html',
      1 => 1426717112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247173747550cd71a781508-28834685',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd71a7a8393_30312813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd71a7a8393_30312813')) {function content_550cd71a7a8393_30312813($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
INSCRIPCION
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/contentWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <form id="formCarreraUsuario" name="formPlanEstudio" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-lg-2 control-label">Carrera</label>
                <div class="col-lg-5">
                    <select id="idCarrera" name="idCarrera" class="form-control">
                        <option selected="selected" value="">Seleccionar Carrera</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Estudiante</label>
                <div class="col-lg-5">
                    <input id="idUsuarioCarrera" name="idUsuarioCarrera" type="text" class="notVisible">
                    <select id="idUsuario" name="idUsuario" class="form-control">
                        <option selected="selected" value="">Seleccionar Estudiante - DNI</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Benficio</label>
                <div class="col-lg-5">
                    <select id="idTipoBeneficio" name="idTipoBeneficio" class="form-control">
                        <option selected="selected" value="">Seleccionar Beneficio</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-6">
                    <input id="repJsonData" name="repJsonData" type="text" class="notVisible">
                    <button type="button" class="btn btn-sm btn-info" onclick="confirmSave('dXN1YXJpb0NhcnJlcmE=','Zm9ybUNhcnJlcmFVc3Vhcmlv','gridFichaInscripcionCarrera();','')">Registrar</button>
                    <button type="button" class="btn btn-sm btn-default" onclick="gridFichaInscripcionCarrera()">Buscar</button>
                    <button type="button" class="btn btn-sm btn-default" onclick="clearForm('Zm9ybUNhcnJlcmFVc3Vhcmlv');">Limpiar</button>
                    <!--<button type="button" class="btn btn-sm btn-success">Success</button>
                    <button type="button" class="btn btn-sm btn-info">Info</button>
                    <button type="button" class="btn btn-sm btn-warning">Warning</button>
                    <button type="button" class="btn btn-sm btn-danger">Danger</button>-->
                </div>
            </div>
        </form>
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/endWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <div id="contentInscripcion"></div>
    
    <div class="tablePlanEstudios widget"></div>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMatterContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMainbarContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/endContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>